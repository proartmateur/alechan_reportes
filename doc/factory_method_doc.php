<?php
/**
 * Factory Method Design Pattern
 *
 * Intent: Provides an interface for creating objects in a superclass, but
 * allows subclasses to alter the type of objects that will be created.
 */

include './separated/iproduct.php';
include './separated/creator.php';
include './separated/concrete_creator1.php';
include './separated/concrete_creator2.php';
include './separated/concrete_products.php';
include './separated/client_code.php';

/**
 * The Application picks a creator's type depending on the configuration or
 * environment.
 */
echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new ConcreteCreator1());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new ConcreteCreator2());
