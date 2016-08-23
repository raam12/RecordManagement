
   function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "php/getdata.php"
      }).done(function( data ) {
	  $('#viewdata').html(data);
      });
       
        $.ajax({
	   type: "GET",
	   url: "php/getcompanydatalist.php"
      }).done(function( data ) {
	  
                   var jsonData = $.parseJSON(data);

var $select = $('#mySelectID');
$(jsonData).each(function (index, o) {    
    var $option = $("<option/>").attr("value", o.companyName).text(o.companyName);
    $select.append($option);
});
                   
      });
       
    }



    function savedata(){
	
	var firstname = $('#firstname').val();
	var lastname = $('#lastname').val();
    var companyName = $('#mySelectID').val();
	var photoname = userImage.files[0].name;
	var email = $('#email').val();
    var password = $('#password').val();
	var mobile = $('#mobile').val();
    var title = $('#title').val();
    var profile = $('#profile').val();
    var language = $('#language').val();
    var isactive = $('#isactive').val();
    var confirmcode = $('#confirmcode').val();
        
        var photoname1 = photoname.split(".");
        photoname = photoname1[0];
        
    console.log(photoname);
	
	var datas="&firstname="+firstname+"&lastname="+lastname+"&companyName="+companyName+"&photoname="+photoname+"&email="+email+"&password="+password+"&mobile="+mobile+"&title="+title+"&profile="+profile+"&language="+language+"&isactive="+isactive+"&confirmcode="+confirmcode;
      
	$.ajax({
	   type: "POST",
	   url: "php/newdata.php",
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }


    function updatedata(str){
	
	var id = str;
	var firstname = $('#firstname'+str).val();
	var lastname = $('#lastname'+str).val();
    var companyName = $('#company'+str).val();
        alert(firstname);
        //alert(companyName);
    //var photoname = userImage3.files[0].name;
	//var photoname = $('#photoname'+str).val();
        
    var photoname = $('#photoname'+str).val();
	var email = $('#email'+str).val();
    var password = $('#password'+str).val();
	var mobile= $('#mobile'+str).val();
    var title= $('#title'+str).val();
    var profile= $('#profile'+str).val();
    var language= $('#language'+str).val();
    var isactive= $('#isactive'+str).val();
    var confirmcode= $('#confirmcode'+str).val();
        
        //var photoname1 = photoname.split(".");
        //photoname = photoname1[0];
	
	var datas="&firstname="+firstname+"&lastname="+lastname+"&companyName="+companyName+"&photoname="+photoname+"&email="+email+"&password="+password+"&mobile="+mobile+"&title="+title+"&profile="+profile+"&language="+language+"&isactive="+isactive+"&confirmcode="+confirmcode;
        
	$.ajax({
	   type: "POST",
	   url: "php/updatedata.php?id="+id,
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
    function deletedata(str){
	
	var id = str;
      
	$.ajax({
	   type: "GET",
	   url: "php/deletedata.php?id="+id
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
 