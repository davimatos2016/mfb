@extends('layouts.app')

@section('content')


<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="http://boiling-castle-97643.herokuapp.com">
                    Meals
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="http://boiling-castle-97643.herokuapp.com/home">Home</a></li>
                    <li><a href="http://boiling-castle-97643.herokuapp.com/meals/create">Add Meal</a></li>
                    <li><a href="http://boiling-castle-97643.herokuapp.com/meals">All Meals</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                aa <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://boiling-castle-97643.herokuapp.com/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                                    </ul>
            </div>
        </div>
    </nav>

    <div class="container">
            <div class="meal-info">
        <h2 class="meal-name">aaa&nbsp;</h2>

        <span class="meal-time">
            Saturday, June 24th, 2017
        </span>

        <br>

        <span class="meal-data label label-pill label-primary">
            0 kCal
        </span>

        <span class="meal-data label label-pill label-default">
            0g Protein
        </span>

        <span class="meal-data label label-pill label-default">
            0g Carbohydrates
        </span>

        <span class="meal-data label label-pill label-default">
            0g Fat
        </span>
    </div>

    <hr>

    <h3>Foods</h3>
            <p>No Foods associated with this meal. Add some below.</p>
    
    <hr>

    <form action="/meals/180/foods" method="post">

        <input type="hidden" name="_token" value="0u4TVqLavGu622RrzMjk44dvpxc1DECeYQv7iiRf">

        <div class="form-group row">
            <label for="name" class="col-sm-2 form-control-label">Food Name</label>
            <div class="col-sm-10">
                <input class="form-control" 
                        type="text" 
                        name="name" 
                        placeholder="Food Name"
                        required
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="protein" class="col-sm-2 form-control-label">Protein</label>
            <div class="col-sm-10">
                <input class="form-control" 
                        type="number" 
                        name="protein" 
                        placeholder="Protein/g"
                        required
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="carbohydrates" class="col-sm-2 form-control-label">Carbohydrates</label>
            <div class="col-sm-10">
                <input class="form-control" 
                        type="number" 
                        name="carbohydrates" 
                        placeholder="Carbohydrates/g"
                        required
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="fat" class="col-sm-2 form-control-label">Fat</label>
            <div class="col-sm-10">
                <input class="form-control" 
                        type="number" 
                        name="fat" 
                        placeholder="Fat/g"
                        required
                        >
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary" value="submit" type="submit">Submit</button>
            </div>
        </div>

    </form>

</div>

    </div>
@endsection
