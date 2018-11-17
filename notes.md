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
