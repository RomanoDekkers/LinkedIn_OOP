<?php
    class User {
        var $is_admin = false;
        var $first_name;
        var $last_name;
        var $username;

        function full_name() {
            return $this->first_name . " " . $this->last_name;
        }
    }

    class Customer extends User {
        var $city;
        var $state;
        var $country;

        function location() {
            return $this->city . ", " . $this->state . ", " . $this->country;
        }
    }

    class AdminUser extends User {
        var $is_admin = true;

        function full_name() {
            return $this->first_name . " " . $this->last_name . " (Admin)";
        }
    }

$u = new User;
$u->first_name = "Jerry";
$u->last_name = "Seinfeld";
$u->username = "jseinfeld";

$c = new Customer;
$c->first_name = "George";
$c->last_name = "Costanza";
$c->username = "gcostanza";
$c->city = "New York";
$c->state = "New York";
$c->country = "United States";

$q = new AdminUser;

$q->first_name = "Romano";
$q->last_name = "Dekkers";
$q->username = "rdekkers";

echo $u->full_name() . " " . $u->username . "<br />";
echo $c->full_name() . " " . $c->username . "<br />";
echo $c->location() . "<br />";
echo $q->full_name() . "<br />";

if($q->is_admin == true){
    echo "The user is a administrator <br />";
}
else{
    echo "The user is not a administrator <br />";
}

echo get_parent_class($u) . "<br />";
echo get_parent_class($c) . "<br />";

if(is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of User <br />";
}
else {
    echo "Instance is not a subclass of User <br />";
}

$parents = class_parents($c);
echo implode(", ", $parents) . "<br />";
?>