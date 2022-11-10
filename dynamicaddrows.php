<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>	
	
  </head>

  <body>
	

	<table  style="border:1px solid;width:100%;text-align:center;" id="table" >
	<tr style="border:1px solid">
	<th style="border:1px solid" >subject</th>
	<th style="border:1px solid" >topic</th>
	<th style="border:1px solid" >homework</th>
	<th style="border:1px solid" >action</th>	
	</tr>
 

<button id = "addrow"  >add row</button>
<button id = "data" name="data"  style="margin-left:50px;" onclick="senddata()">send data</button>	
<p id="demo"></p>
<script>

 $(document).ready(function(){
	$('#addrow').click(function(){
		 var base = '<tr><td><input type="text" id="subject" name="subject[]"></td><td><input type="text" id="topic" name="topic[]"></td><td><input type="text" id="homework" name="homework[]"></td><td><button name ="remove" id="remove">remove</button></td></tr>';
		$('#table').append(base) ;});
	$('#table').on('click','#remove',function(){

		$(this).closest('tr').remove();});

});

</script>




	</table>



<script>


let subj =[];
let topic =[];
let homework =[];





function senddata(){
	$("input[name^='subject']").each(function() {
		subj.push($(this).val());	
		});
	$("input[name^='topic']").each(function() {
		topic.push($(this).val());	
		});
	$("input[name^='homework']").each(function() {
		homework.push($(this).val());	
		});
	
	







//console.log(topic);

//console.log(homework);




var values = JSON.stringify(subj);

console.log(values);

 $.ajax({
        url: "senddata.php",
        type: "post",
        data: {values:values} ,
        success: function (response) {
		
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


}



</script>	


	
</body>
</html>