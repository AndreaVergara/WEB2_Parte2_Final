{include file="templates/header.tpl" }


<div class="container  mx-auto mt-3 border p-5 login colorFondo" >
    <h1>{$titulo}</h1>
    <form action="verify" method="POST">

        <div class="row">
            <div>
                <label for="" class="form-label"> Email: </label>
            </div>
            <input placeholder="email" class="form-control" type="text" name="email" id="email" required>
        </div>
        <div class="row mt-2">
            <div>
                <label for="" class="form-label"> Contraseña:  </label>
            </div>
            <input placeholder="password"  class="form-control" type="password" name="password" id="password" required>
        </div>
        <div class="row mt-2">
            <input type="submit" class="btn btn-success" value="Login">
        </div>
        
    </form>
    <h4 class="text-danger"> {$error}</h4>
</div>





{include file="templates/footer.tpl" }