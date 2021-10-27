<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="showFeedbacks"></div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {

                showFeedbacks();

                function showFeedbacks() {
                    $.ajax({
                        url: "../../../assets/showFeedbacks.php",
                        method: "post",
                        //grab data from form
                        data: $("#feedback-form").serialize() + "&action=feedbackShow",
                        success: function(response) {
                            // console.log(response);

                            $("#showFeedbacks").html(response);
                            //new



                        }

                    })
                }
            }





        );
    </script>
</body>

</html>