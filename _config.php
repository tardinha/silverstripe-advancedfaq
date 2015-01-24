<?php

if (!class_exists('GridFieldOrderableRows') && !class_exists('GridFieldSortableRows')) {
	throw new Exception('The Advanced faq module requires the GridfieldExtensions module OR GridFieldOrderableRows module.');
}
