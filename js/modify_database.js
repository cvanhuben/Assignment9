// This was achieved with http://talkerscode.com/webtricks/add-edit-and-delete-records-using-jquery-ajax-php-and-mysql.php. The php file uses this as well

function edit_row(id)
{
 var name=document.getElementById("name_val"+id).innerHTML;
 var email=document.getElementById("email_val"+id).innerHTML;

 var favoriteFramework=document.getElementById("favoriteFramework_val"+id).innerHTML;
 var featuresToChange=document.getElementById("featuresToChange_val"+id).innerHTML; 
 var favoriteFeature=document.getElementById("favoriteFeature_val"+id).innerHTML; 
 var suggestionFeature=document.getElementById("suggestionFeature_val"+id).innerHTML; 
 var suggestionFramework=document.getElementById("suggestionFramework_val"+id).innerHTML; 

 document.getElementById("name_val"+id).innerHTML="<input type='text' id='name_text"+id+"' value='"+name+"'>";


 document.getElementById("email_val"+id).innerHTML="<input type='text' id='email_text"+id+"' value='"+email+"'>";
 document.getElementById("favoriteFramework_val"+id).innerHTML="<input type='text' id='favoriteFramework_text"+id+"' value='"+favoriteFramework+"'>";
 document.getElementById("featuresToChange_val"+id).innerHTML="<input type='text' id='featuresToChange_text"+id+"' value='"+featuresToChange+"'>";
 document.getElementById("favoriteFeature_val"+id).innerHTML="<input type='text' id='favoriteFeature_text"+id+"' value='"+favoriteFeature+"'>";
 document.getElementById("suggestionFeature_val"+id).innerHTML="<input type='text' id='suggestionFeature_text"+id+"' value='"+suggestionFeature+"'>";
 document.getElementById("suggestionFramework_val"+id).innerHTML="<input type='text' id='suggestionFramework_text"+id+"' value='"+suggestionFramework+"'>";

 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
 var counter=id;
 var name=document.getElementById("name_text"+id).value;
 var email=document.getElementById("email_text"+id).value;
 var favoriteFramework=document.getElementById("favoriteFramework_text"+id).value;
 var featuresToChange=document.getElementById("featuresToChange_text"+id).value; 
 var favoriteFeature=document.getElementById("favoriteFeature_text"+id).value; 
 var suggestionFeature=document.getElementById("suggestionFeature_text"+id).value; 
 var suggestionFramework=document.getElementById("suggestionFramework_text"+id).value;

 $.ajax
 ({
  type:"POST",
  url:"modify_database.php",
  data:{
   edit_row:'edit_row',
   counter_val:counter,
   name_val:name,
   email_val:email,
   favoriteFramework_val:favoriteFramework,
   featuresToChange_val:featuresToChange,
   favoriteFeature_val:favoriteFeature,
   suggestionFeature_val:suggestionFeature,
   suggestionFramework_val:suggestionFramework
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("name_val"+id).innerHTML=name;
    document.getElementById("email_val"+id).innerHTML=email;
    document.getElementById("favoriteFramework_val"+id).innerHTML=favoriteFramework;
    document.getElementById("featuresToChange_val"+id).innerHTML=featuresToChange; 
    document.getElementById("favoriteFeature_val"+id).innerHTML=favoriteFeature; 
    document.getElementById("suggestionFeature_val"+id).innerHTML=suggestionFeature; 
    document.getElementById("suggestionFramework_val"+id).innerHTML=suggestionFramework; 

    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
    
   }
  }
 });
}

function delete_row(id)
{
  var counter = id;
 $.ajax
 ({
  type:'post',
  url:'modify_database.php',
  data:{
   delete_row:'delete_row',
   counter_val:counter,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}