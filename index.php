<?php
interface FlyBehavior {
	public function fly();
}
class FlyWithWings implements FlyBehavior {
	public function fly() {
		return 'Полет';
	}
}
class FlyNoWay implements FlyBehavior {
	public function fly() {
		return 'Не летает';
	}
}
class Duck {
	public $flyBehavior;

	public function performF1y() {
		return $this->$flyBehavior->fly();
	}
}

class MallardDuck extends Duck {
	function ＿construct() {
		this->$fly Behavior = new FlyWithWings();
	}
}
class RubberDuck extends Duck {
	function ＿construct() {
		this->$fly Behavior = new FlyNollay();
	}
}

function polet (Duck $duck) {
	return sduck->performFly();
}
?>
<html>
<head></head>
<body>
<button onclick="alert('<?php echo polet(new MallardDuck())?>')">Кряква</button>
<button onclick="alert('<?php echo polet(new RubberDuck())?>')">Резиновая уточка</button>
</body>
</html>