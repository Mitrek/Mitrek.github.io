//Page made by as known online: Mitrek to his Girlfriend MelJM.



// Function transforms numbers in strings and add px to the end of them.
function pixelate(array) {
	for (var i = 0; i < array.length; i++)
		array[i] = array[i]+'px';
	return array;
	};



// CRA stands for Create Random Array.
function CRA(numOfObjects) {
	var RA = [];
	while (RA.length < numOfObjects) {
		var RNum = Math.round(Math.random() * (numOfObjects-1));
		if ($.inArray(RNum,RA) < 0) {
			RA.push(RNum);
		}
	}
	return RA
}

//Heart Function
function hFunction() {
	var complete = 1
	var randomList = CRA(18)
	var rL = randomList
	var i = 0
	$('div').each(function() {
			$('#'+rL[i]).animate({left: posx[i], top: posy[i]},
				{duration: 1700,
			});
			i++
			});
}

//Main Function
function main(){
		hFunction();
		$('h4').remove();
		$('h1').fadeTo(1000,1);
		$('h2').remove();
		$('h3').remove();
		var h2 = (loveList[j]*2);
		var h3 = (loveList[j]*2)+1;
		$('body').append('<h2>'+love[h2]+'</h2>');
		$('body').append('<h3>'+love[h3]+'</h3>');
		if (j < 1) {
			$('h2').fadeTo(4000,1);
			$('h3').fadeTo(4000,1);
		}
		else {
			$('h2').fadeTo(1000,1);
			$('h3').fadeTo(1000,1);
		}
		$('h5').remove();
		$('body').append('<h5>['+(j+1)+'/'+loveList.length+']<h5>');
		if (j >= 103) {j = 0};
		j ++;
		}

//Heart Dots
var posx = [100,150,200,250,300,350,400,450,500,500,450,400,350,300,250,200,150,100];
var posy = [150,120,100,120,150,120,100,120,150,290,350,410,460,500,460,410,350,290];

pixelate(posx); pixelate(posy);

//Global Vars
var loveList = CRA(104);
var j = 0;

$(document).ready(function() {
	
	//Creating the Heart Divs:
	var k = 0
	for (var i = 0; i < 18; i++) {
		$('body').append('<div id="'+(i)+'"></div>');
	};
	
	//Initial animating (probably dispensable):
	$('div').each(function() {
		$(this).animate({top: k+'px'}, 1000);
		k += 50;
		});

	//Moving divs to the heart position.

	

	$(document).keydown(function() {
		
		main();
	});
	$(document).click(function() {

		main();
	});
	/* Removed behavior
	$('div').mouseover(function() {
		var id = $(this).attr('id')
		$(this).animate({top: id*50+'px', left: '0px'}, 1000)		
	
	});
*/
	});
