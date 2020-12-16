<!DOCTYPE html>
<html lang="en">

<head>
    <title>My complete bootstrap practice</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <meta name="description" content="Enjoy Fast Access To Top Family Lawyers Across The US.">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/7516c4b4cc.js" crossorigin="anonymous"></script>


    <link href="../static/css_prac.css" type="text/css" rel="stylesheet" media="screen" />
</head>

<style>


    .bord{
        border: 15px solid rgba(249, 252, 248, 0.2) !important;
        border-radius: 18px;
    }
</style>

<body class="bg_c">
      
    <section class="bg_bl p-0">

        <!-- Navbar -->
        <div class="nav_par p-0">
            <!-- <img class="nav_logo trans_img2" src="../static/Image/logo21.png" alt="logo" width="100" height="50"/> -->
            <p class="size25 b8 cl_w pl_2">CLOTH CLASSIFIER</p>

            <ul class="nav p_0">
                <li class="nav_l verCen mr-2"><a class="cl_bp" href="index.html">Home</a></li>
                <!-- <li class="nav_l verCen mr-2"><a class="cl_bp" href="AboutProject.html">About Project</a></li>
                <li class="nav_l verCen mr-2"><a class="cl_bp" href="AboutTeam">About Team</a></li> -->
            </ul>
        </div>
    </section>

    <section class="container bg_w mt-5 mb-5 sh_lg">
        
        <div class="row p-4">
            <div class="col col-lg-6">
                <h1 class="size42 b8 pb_2 tc">Input Image</h1>
                <div class="container border centre">
                    <img src="{{url_for('load_img')}}" class="img-fluid" alt="image">
                </div><!-- End of responsive images -->
            </div>

            <div class="col col-lg-6">
                <div class="table_flow">
                    <h1 class="size42 b8 pb_2 tc">Result</h1>



                    <table>
                    
                        
                        <!-- // if({{data[0]}} >= 0.5){ echo "<tr style='background-color: green;'>"; } -->
                        <!-- else{echo '<tr>';} -->
                        {% if data[0] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Tshirt/Top</td>
                            <td class="size16">{{data[0]}}</td>
                        </tr>

                        {% if data[1] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Trouser</td>
                            <td class="size16">{{data[1]}}</td>
                        </tr>

                        {% if data[2] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Pullover</td>
                            <td class="size16">{{data[2]}}</td>
                        </tr>

                        {% if data[3] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Dress</td>
                            <td class="size16">{{data[3]}}</td>
                        </tr>

                        {% if data[4] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Coat</td>
                            <td class="size16">{{data[4]}}</td>
                        </tr>

                        {% if data[5] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Sandal</td>
                            <td class="size16">{{data[5]}}</td>
                        </tr>

                        {% if data[6] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Shirt</td>
                            <td class="size16">{{data[6]}}</td>
                        </tr>
                        
                        {% if data[7] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Sneaker</td>
                            <td class="size16">{{data[7]}}</td>
                        </tr>
                        
                        {% if data[8] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Bag</td>
                            <td class="size16">{{data[8]}}</td>
                        </tr>
                        
                        {% if data[9] > 0.50 %}
                        <tr class="bg-success">
                        {%else%}
                        <tr>
                        {%endif%}
                            <td class="size17 b8 tl pl-3">Ankle Boot</td>
                            <td class="size16">{{data[9]}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <section class="bg_c" style="background-color: #0b1b33">
            <div class="con con90">
                <div class="footer2_grid pl_1 mt-0 mb-4">
                    <div class="mt_1">
                        <!-- <a href="AboutProject.html" class="size13 pl_0">ABOUT PROJECT</a> |
                        <a href="AboutTeam.html" class="size13">ABOUT TEAM</a> -->
                        <p class="size13 tl mb_0 pl_0">
                            COPYRIGHT©2020, ALL RIGHTS RESERVED.
                        </p>
                    </div>

                    <div class="verCen mt_2">
                        <a href="" class="fab fa-facebook-f fa-2x pr_1"></a>
                        <a href="" class="fab fa-twitter fa-2x pr_1"></a>
                        <a href="" class="fab fa-instagram fa-2x pr_1"></a>
                        <a href="" class="fab fa-youtube fa-2x pr_1"></a>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    

</body>

</html>
            