$(document).ready(function () {
    $('.alert').delay(1500).slideUp();
    
/**
    Select All
 */
    $('.selectall').on("click", function () {
        $('.selectbox').prop('checked', $(this).prop('checked'));
    })

    $('.selectbox').change(function () {
        var total = $('.selectbox').length;
        var number = $('.selectbox:checked').length;

        if(total == number)
        {
            $('.selectall').prop('checked', true);
        }
        else
        {
            $('.selectall').prop('checked', false);
        }
    })
//-------------------------------------------------

    /**
        CRUD AJAX
     */
     $('#datatable').DataTable();

     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
         }
     });

     //Them mới
     $('#save').show();
     $('#update').hide();

     function viewAll(){
        $.ajax({
            type: "GET",
            url: "crudajax",
            dataType: "json",
            success: function (response) {
                var row = "";
                $.each(response, function (index, value) { 
                   row += "<tr>";
                   row += "<td>"+(++index);  
                   row += "</td>";
                   row += "<td>"+value.name;
                   row += "</td>";
                   row += "<td>"+value.detail;
                   row += "</td>";
                   row += "<td>"+value.author;
                   row += "</td>";
                   row += "<td>";
                    row += "<button onclick='updatePost("+value.id+","+value.name+","+value.detail+","+value.author+")' class='btn btn-gradient-primary btn-sm'><i class='mdi mdi-pen text-white'></i></button>";
                    row += "<button onclick='deletePost("+value.id+")' class='btn btn-gradient-danger btn-sm'><i class='mdi mdi-delete'></i></button>";
                   row += "</td>";
                   row += "</tr>";
                });

                $('#bdDatatable').html(row);
            }
        });
     }

     viewAll()

     function clearData(){
        $('#id').val('');
        $('#name').val('');
        $('#detail').val('');
        $('#author').val('');
     }

     function addPost()
     {

     }

     function editData(){

     }

     function updatePost(id,name,detail,author){

     }

     function deletePost(id){

     }
});