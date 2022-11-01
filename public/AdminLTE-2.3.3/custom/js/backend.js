$(function () {
   $('.delete').on('click', function (e) {
      var deleteData = $(this);
      swal({title: "هل انت متأكد ؟",
         text: "لا يمكنك التراجع عن الحذف بعض الضغط على زر نعم !",
         type: "warning",
         showCancelButton: true,
         confirmButtonText: "نعم اكمل الحذف",
		 cancelButtonText: "لا تراجع عن الحذف",
         confirmButtonColor: "#DD4140",
         closeOnConfirm: false,
         showLoaderOnConfirm: true,
      },
      function(){

         deleteDataAjax($(deleteData).data('action'),
                        $(deleteData).data('csrf'),
                        $(deleteData).data('id'));
      });
      e.preventDefault();
   });

   function deleteDataAjax(action,csrf,id)
   {
      $.ajax({
         url: action ,
         type: 'DELETE',
         data: { _token: csrf},
         success: function(data){
            if(data==true){
               //$('tr#'+id).remove();
               if (typeof table === 'undefined') {
                  console.log($('tr#'+id).remove());
           			$('tr#'+id).remove();
               }else{
               		table.row('#'+id).remove().draw( false ); // this line when use data table only
               }
               swal({
				  title: "تم الحذف بنجاح !.",
				  type: "success",
				  confirmButtonText: "اغلق"
				});
            } else {
            	swal({
				  title: "خطأ عند محاولة الحذف !.",
				  type: "error",
				  confirmButtonText: "اغلق"
				});
            }
         },
         error:function(){
            swal({
			  title: "خطأ عند محاولة الحذف !.",
			  type: "error",
			  confirmButtonText: "اغلق"
			});
         },
      });
   }
   
   $("#deleteAll-action").click(function(e){
   		e.preventDefault();
   		checkbox = $(".bulk-action-checkbox:checked");
   		if(checkbox.length > 0){
	      swal({title: "هل انت متأكد ؟",
	         text: "لا يمكنك التراجع عن الحذف بعض الضغط على زر نعم !",
	         type: "warning",
	         showCancelButton: true,
	         confirmButtonText: "نعم اكمل الحذف",
			 cancelButtonText: "لا تراجع عن الحذف",
	         confirmButtonColor: "#DD4140",
	         closeOnConfirm: false,
	         showLoaderOnConfirm: true,
	      },
	      function(){
			checkbox.each(function(){
   				deleteDataAjax($(this).data('delete'),$(this).data('csrf'),$(this).data('id'));
   			});
	      });
   		}
   		if(checkbox.length == 0){
   			swal({
			  title: "من فضلك قم باختيار على الاقل خيار واحد للحذف !.",
			  type: "error",
			  confirmButtonText: "اغلق"
			});
   		}

   });
   
   $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
   
});
