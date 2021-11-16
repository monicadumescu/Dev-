#include <stdlib.h>
#include <stdio.h>
#include <ctype.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <unistd.h>
#include <fcntl.h>
#include <string.h>
#include <sys/wait.h>
#include <signal.h>

void ceva()
{
	while(1)
	{
		printf("Buna fac ceva\n");
	}
}

void altceva(int n)
{
	int status;
	int pid = wait(&status);
	if (WIFEXITED(status))
	{
		printf("Procesul fiu %d s-a terminat cu codul %d\n", pid, WEXITSTATUS(status));
	}
	printf("Terminating parent process!\n");
	exit(0);
}

int main (int argc, char *argv[])
{
	int n=0;
	int pidc=fork();
	if (pidc<0)
	{
		printf("Eroare");
		exit(3);
	}
	if (pidc==0)
	{
		for (int i=0;i<=100;i++)
		{
			n=n+i;
		}
		exit(n);
	}

	struct sigaction new_action;
	new_action.sa_handler=altceva;
	sigaction(SIGCHLD,&new_action, NULL);
	ceva();
	sleep(1);
	return 0;
}