confControllers.controller('BeneficiarioController', function ($scope,$location,authUsuario,SessionService,SessionSet,$state,$http) {

	$scope.beneficiarioVO={id:'',nombre:'nombre', identificacion:'', direccion:'', telefono:'',_token:authUsuario.token()};

	$scope.registrar=function(){

	$http.post("beneficiario/registrar",$scope.beneficiarioVO).success(function(data, status, headers, config) {

	 	if (data=='Success') {
	 		alert(data);  
	 		$scope.nuevo();
	 	}else{
	 		alert('error');   
	 	}
	 	
      });

	}

	$scope.nuevo=function(){

		$scope.beneficiarioVO.id='';
		$scope.beneficiarioVO.nombre='';
		$scope.beneficiarioVO.identificacion='';
		$scope.beneficiarioVO.direccion='';
		$scope.beneficiarioVO.telefono='';
		$scope.beneficiarioVO._token=authUsuario.token();

	}

});