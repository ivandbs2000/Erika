/*Esta funcion permite obtener el valor del select de html(onchange)*/
let originalPrice;
let ivaCalculate;

var arr = [];
var menuItems =["Mariscos","Vegetariana","Carne y Pollo"]
function getValueType (paellaType){
	var band = 0
	this.paellaType = paellaType;
	for(var i = 0; i < arr.length;i++){
		if(arr[i] == paellaType.value){
			arr.splice(i,1)
			band  = 1
		}
	}
	if (band == 0){
		arr.push(paellaType.value);
	}
	console.log(arr);	
}

function getValuePrice(paellaPrice){

	this.paellaPrice = paellaPrice;
	ivaCalculate = Math.round((this.paellaPrice.value * 19) / 100);
	originalPrice = this.paellaPrice.value - ivaCalculate;
}

function getValueCoin(typeCoin){
	this.typeCoin = typeCoin;
}

function buildPaella(){
	/*Construccion de paella*/
	var factory = executeFactory(this.paellaType.value);
	var paellaProduct = generatePaella(factory.type);
	console.log(paellaProduct);

	/*llamamdo a patrones de diseño prototype y singleton*/
	var buildBase = produceBase(); //prototype
	var executeSingle = executeSingleton();
	console.log(buildBase);
	console.log(executeSingle);

	/*validacion de tipo de moneda para llamado del adaptador*/
	if(this.typeCoin.value == "dolar"){
		console.log("Precio en dolares con iva " + new CalculatePriceDolar().newCalculateDolar(originalPrice));
	}else if(this.typeCoin.value == "euro"){
		console.log("Precio en dolares con iva " + new CalculatePriceEuro().newCalculateEuro(originalPrice));
	}



	var micarrito = new buildShoppingCar(factory.type,paellaProduct);
	console.log(micarrito)
	
	var decorator = new executeDecorator(menuItems);
	console.log(decorator)
	console.log("Precio Original " + originalPrice);
	console.log("Precio Iva " + ivaCalculate);
}