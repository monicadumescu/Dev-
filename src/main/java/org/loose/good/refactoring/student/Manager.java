package org.loose.good.refactoring.student;

import java.util.ArrayList;
import java.util.List;

public class Manager {

    public List<String> getPeopleNames(List<Person> people) {
        ArrayList<Person> personList = new ArrayList<>();
        ArrayList<String> stringList = new ArrayList<>();
        for (Person person : people) {
            int x = person.getAge();
            if (x >= 18) {
                personList.add(person);
            }
        }

        for (int i = 0; i < personList.size(); i++) {
            Person s = personList.get(i);
            String name = s.getFirstName() + " " + s.getLastName();
            stringList.add(name);
        }

        for (int i = 0; i < stringList.size(); i++)
            for (int j = i; j < stringList.size(); j++)
                if (stringList.get(i).compareToIgnoreCase(stringList.get(j)) > 0) {
                    String aux = stringList.get(j);
                    stringList.set(j, stringList.get(i));
                    stringList.set(i, aux);
                }

        for (String s : stringList) System.out.println(s);

        return stringList;
    }
}