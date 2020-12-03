<?php

/*
1. Разработать класс Control , который описывает базовые атрибуты стиля любого html-элемента и будет
	базой для каждого следующего класса, в котором
	создать private-поля background, width, height, создать
	методы getBackground(), setBackground(), getWidth(),
	setWidth(), getHeight(), setHeight(). Методы, которые
	начинаются с get, должны возвращать соответствующее им поле и не принимать параметров, методы
	set принимают параметр и записывают его в соответствующее поле.
*/
/*
2. Создать класс Input, который описывает базовые атрибуты тега <input>, унаследовать класс Control. Добавить к классу Input private-поля name, value и методы
	getName(), setName(), getValue(), setValue(). Методы,
	которые начинаются с get, должны возвращать соответствующее им поле и не принимать параметров,
	методы set принимают параметр и записывают его в
	соответствующее поле.
*/
/*
3. Создать класс Button , который будет строить на странице button, унаследовать класс Input. Добавить к классу
	Button private-поле isSubmit, метод getSubmitState(),
	который не принимает в качестве параметров ничего и возвращает значение поля isSubmit, метод
	setSubmitState(), записывающий в поле isSubmit значение"true", и конструктор, принимающий параметры
	_background, _width, _height, _name, _value, _isSubmit
	и вызывает соответствующие методы для заполнения
	параметров поля.
*/
/*
4. Создать класс Text , который будет строить на странице
	textbox, унаследовать класс Input. Добавить к классу
	Text private-поле placeholder, метод getPlaceholder(),
	который не принимает в качестве параметров ничего и возвращает значение поля placeholder, метод
	setPlaceholder(), который принимает в качестве параметра строку и записывает ее в поле placeholder, и
	конструктор, принимающий в качестве параметров
	_background, _width, _height, _name, _value, _placeholder
	и вызывает соответствующие методы для заполнения
	параметров поля
*/
./*
5. Создать класс Label , который будет добавлять label
	ко всем элементам управления, унаследовать класс
	Control. Добавить к классу Label private-поле for, метод
                                                       getParentName(), который не принимает в качестве
	параметров ничего и возвращает значение поля for,
    setParentName(), который принимает в качестве параметров объект класса Button или Text, вызывает из
	этого объекта метод getName() и записывает в поле
	for результат его выполнения, и конструктор, принимающий в качестве параметров _background, _width,
	_height, _name, _value, _forObject и вызывает соответствующие методы для заполнения параметров поля
*/
/*
6. В файле index.php создать функцию convertToHTML(),
	которая на входе принимает объект класса Control и
	превращает поля в HTML-код и возвращает его.
*/
/*
7. Создать объект класса Button и Text. Добавить в объект класса Text объект класса Label и вызвать для всех
	функцию convertToHTML().
*/