<?php 

	$ingredientes = new SplQueue();

	$ingredientes->enqueue('Agua');
	$ingredientes->enqueue('Energetico');
	$ingredientes->enqueue('Suco');
	$ingredientes->enqueue('Refrigerante');

	foreach ($ingredientes as $key) {
		
		print 'Item: '.$key.'<br>'.PHP_EOL;

	}

	print PHP_EOL.'<br><hr><br>';

	$i = 0;

	while($i < $ingredientes->count()){

		print 'Retirar '.$ingredientes->dequeue().'<br>'.PHP_EOL;

		print 'Restam '.$ingredientes->count().' ingredientes na lista<br><br>';

	}

?>