$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: "Database.php",
        dataType: "json",
        success: function (response) {

            var value;


            updateFormList(response)
                
            
            $('.drop').on('change', function () {
            
                value = $(this).val();
                AddElementValues(response, value)

                
            });

    

            $('#add').on('click', function(){

                let Quantity = $('#exampleFormControlInput1').val();
                let price = $('#price').val();

                console.log(value);
                console.log(Quantity);
                console.log(price);

                let count = 0;

                price = Quantity * price;

                if(Quantity == 0){

                    alert("Quantity cannot be zero");

                }

                else{


                    
            $('.table-body').append('<tr>' +'<th>'+count+'</th><td>'+value+'</td><td>'+Quantity+'</td><td>'+price+'</td></tr>');

                }



         



            })
       


        



        }
    });

    
    function updateFormList(response) {

        $.each(response, function (key, value) {

            $('.drop').append('<option value="' + value['Name'] + '">' + value['Name'] + '</option>')

        });

    }



    function AddElementValues(response , item) {

        $.each(response, function (key, value) { 
            
            if(value['Name'] == item){

                $('#price').val(value['Price']);

            }

        });





}

      

    

})