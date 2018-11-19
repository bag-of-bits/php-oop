# WHAT IS OBJECT ORIENTED PROGRAMMING (OOP)?

* A style of coding that groups similar tasks into containers

* PHP defines containers using *Classes*
* Classes contain variables and functions that define an object
* In a Class, a variable is called a *property* and a function is called a *method*
* A property is an attribute or characteristic of the object
* A method is an action the object performs
* Everything in this world is an object

**EXAMPLE:** A person is an object who has properties and methods.  A person's property can be their height, hair color, eye color, age, citizenship etc.  A person's methods can be walking, talking, eating, sleeping etc.

A class is like a template or a mold to make several objects belonging to the same class.  If we are making toy teddy bears from the template we can make hundreds of teddy bears using *Class* and can even change their properties to give them different features such as the color of their fur, and methods to allow them to perform different actions such as words they can say or noises they can make. When can *instantiate* a new object from the class.  When an obect is instantiated it is an *instance* of the class. 

Grouping code like this keeps your code DRY, saves time, adds modularity, makes your code more mantainable, helps with scalability, increases the reusability of the code, and saves time which is money (ROI).

# CONVENTIONS WHEN ORGANIZING FILES AND CREATING CLASSES

* Following these standards allows your code to be more readable

* Typically only one class per file (Although not a requirement)
* The filename shold be the same as the class name
* All class files should be stored within a classes folder
* The class Name should be upper camel case (studly caps) with the first letter capitalized. e.g.) class MyClassName
* Standard is to start curly braces on next line down after defining the class Name (Although not required)


# ADDING AND ACCESSING PROPERTIES

* When declaring properties their visibility must be defined by an access modifier (public, private, protected)

* Access modifiers allow us to control access to our properties
* To access an obects property use an arrow / dart. **e.g.) $objectName->propertyName;**
* To change a property value use **$objectName->propertyName = "Type some value here";**
* Change a property value is the same as changing a regular variable except that we first specify the object name and then use an arrow to point towards the property name.
* We don't need to use $ in front of the property name since it's already in front of the object name.


# ADDING AND CALLING METHODS

* Methods are class specific functions

* When declaring a method we need to declare the visibility.
* Naming convention for methods is camelCase and for the curley braces to start on the next line.
* Within the method we descripe the action we want to perform.
* PHP allows objects to reference themselves using the keyword variable *$this* which indicates we want to use the objects own property or method, and allows us to have access to them within the class scope. e.g.) $this->propertyName
* Calling a method is the same as accessing a property, except we add round brackets at the end to specify we are calling a method.
* E.g.) $objectName->objectMethod();


# ACCESS MODIFIERS

* Controls the visibility of a property or method.

* Three options are 1.) Public - Can be accessed from inside or outside the class. 2.) Protected - Can only be accessed within the class itself and by inheriting and parent classes. 3.) Private - Can only be accessed by the class that defines the member.

### SANITIZING / FORMATTING DATA BEFORE IT'S STORED TO THE OBJECT

* If we set a property directly we're at the mercy of whatever data is passed.

* We can create a Setter Method to format the data before it gets stored to the object. The common naming convention is to use the word set before the name of the method.  e.g.) public function setName($name);
* Methods also have access modifiers so you can create private methods that can only by other methods within the class, so they cannot be accessed directly from outside the class.


# ARRAY AS PROPERTY

* When creating a property that is an array, initialize it as an empty array(). This will make your code easier to read.
* Create a Setter method to control the formatting.
* Create a Getter method for retrieval.


# SINGLE RESPONSIBILITY TENET OF PROGRAMMING

* Every module or class should have responsibility over a single part of the functionality provided by the software.

* That responsibility should be entirely encapsulated / contained by the class.
* A class should have only two reasons to change with both changes depending on the user:
    1. The content of the report can change

    2. The format / display of the report can change
* E.g.) Setting and Getting data may be the main concerns of methods in a class, but displaying data can change based on where we're using that data, not what data we're using.
* A class is a way to organize code and group the functionality and data in a logical manner, but any methods that deal with the display or rendering of data should be put in a separate group, such as creating a new file in the classes directory named render.php


# STATIC METHODS

* Accessible without needing an instantiation of the class. 

* A property declared as static cannot be accessed with an instantiated class object (though a static method can).
* The pseudo-variable *$this* is not available inside the method declared as static because static methods are callable without an instance of the object created.
* Static properties cannot be accessed through the object using the arrow operator ->
* ClassName::methodName($objectInstance);

Documentation: http://php.net/manual/en/language.oop5.static.php
