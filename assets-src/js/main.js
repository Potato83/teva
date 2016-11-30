// $('#eng').on('click', function(){
// 	$('#eng').addClass('selected');
// 	$('#fre').removeClass('selected');
// 	$('.fre').fadeOut(250).promise().done(function(){
// 		$('.eng').fadeIn(250).removeClass('hide');

// 	});
// });

// $('#fre').on('click', function(){
// 	$('#fre').addClass('selected');
// 	$('#eng').removeClass('selected');
// 	$('.eng').fadeOut(250).promise().done(function(){
// 		$('.fre').fadeIn(250).removeClass('hide');

// 	});
// });

// $('.qtranxs-lang-menu-item > a').click(function(){
// 	 $(this).parent().addClass('selected');
// 	return;
// });



// $('.qtranxs-lang-menu-item-en > a').click(function(){
// 	alert('ok');
// 	return;
// });

// $('.qtranxs-lang-menu-item > a').click(function(){
// 	alert(lango);
// 	return;
// });

if (lango === 'fr'){
	//alert('franch!');
	$('.qtranxs-lang-menu-item-fr > a').parent().addClass('selected');
	$('.qtranxs-lang-menu-item-en > a').parent().removeClass('selected');
	console.log('french');
}

if (lango === 'en'){
	//alert('anglish!');
	$('.qtranxs-lang-menu-item-en > a').parent().addClass('selected');
	$('.qtranxs-lang-menu-item-fr > a').parent().removeClass('selected');
	console.log('english');
}