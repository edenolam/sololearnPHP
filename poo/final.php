<?php
class myClass {
    final function myFunction() {
        echo "Parent";
    }
}
// ERROR because a final method cannot be overridden in child classes.
class myClass2 extends myClass {
    function myFunction() {
        echo "Child";
    }
}

final class myFinalClass {
}

// ERROR because a final class cannot be inherited.
class myClassFinal extends myFinalClass {
}

