<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('contacto@institutolean.cl'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Lean Summit Chile</title>
<meta name="description" content="Lean Summit Chile: Octubre 22-23-24, 2018.">                       <!--search engine's results page-->
<meta name="keywords" content="Lean, Summit, Chile, Oct, Octubre, 22, 23, 24, Santiago">             <!--keywords for search engine results-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>                     <!--mobile responsiveness for IE9-->
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>                                         
<link rel="stylesheet" type="text/css" href="css/media-queries.css">                                 <!--css stylesheet-->
<link rel="stylesheet" type="text/css" href="css/contact.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--icons-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
<script type="text/javascript" src="js/main.js"> </script>                                            <!--javascript-->
<script type="text/javascript" src="js/scroll.js"> </script>                                          <!--scroll js-->
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>                            <!--js validation-->
<link rel="icon" href="images/favicon.gif">                                                           <!--favicon-->
</head>
<body>

<div id="wrapper" class="container-fluid">    
<div id="header">
<div class="row">
    <div  id="logo" class="col-sm-12 col-md-3">
    <img src="images/Logo%20Lean%20Summit%202018%20.png" class="img-responsive">
    </div>
    <div class="col-md-9">
    <h2 id="title1">Primer Lean Summit de habla hispana de América Latina</h2>
    </div>
</div>
</div>
<div id="contactDetails">
    <p>+56 2 22113069</p> 
    <p>contacto@institutolean.cl</p>
    <p>www.institutoleanchile.cl</p>
    <table class="table table-condensed">
        <tbody>
            <tr>
                <td class="flag"><a href="contactForm-en.php">English</a></td>
                <td><a href=contactForm-en.php><img src="images/usFlag.png" class="img-responsive" width="20px" alt="US flag"></a></td>
            </tr>
            <tr>
                <td class="flag"><a>Español</a></td>
                <td><img src="images/chileFlag.png" class="img-responsive" width="20px" alt="Chilean flag"></td>
            </tr>
        </tbody>
    </table>
</div>

<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post'>    <!-- Form Code Start -->
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
    
<div id="contactForm" class="container-fluid">
<h2 id="title2">INSCRIPCIONES</h2>
    <div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="name">Nombre*</label>
            <input type="text" class="form-control" id="name" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
            <span id='contactus_name_errorloc' class='error'></span>
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" class="form-control" id="email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
            <span id='contactus_email_errorloc' class='error'></span>
        </div>
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" value='<?php echo $formproc->SafeDisplay('empresa') ?>'>
        </div>
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" class="form-control" id="pais" name="pais" value='<?php echo $formproc->SafeDisplay('pais') ?>'>
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="rut">RUT / Pasaporte</label>
            <input type="text" class="form-control" id="rut" name="rut" value='<?php echo $formproc->SafeDisplay('rut') ?>'>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value='<?php echo $formproc->SafeDisplay('telefono') ?>'>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value='<?php echo $formproc->SafeDisplay('cargo') ?>'>
        </div>
    </div>
    <div class="form-inline">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="asistente"><input type="checkbox" class="form-control" id="asistente" name="asistente" value='<?php echo $formproc->SafeDisplay('asistente') ?>'>ASISTENTE</label>
        </div>
        <p class="checkb">Para mayor información, <a href="pdf/Ficha%20de%20Inscripcion%20Summit.pdf" download>descarge pdf</a></p>
        <p class="checkb">Para inscripción llene y envíe la ficha del pdf a contacto@institutolean.cl</p>
        <div class="form-group">
            <label for="expositor"><input type="checkbox" class="form-control" id="expositor" name="expositor" value='<?php echo $formproc->SafeDisplay('expositor') ?>'>EXPOSITOR</label>
        </div>
        <p class="checkb">Para mayor información, <a href="pdf/Informacio%CC%81n%20para%20Expositores_v1.pdf" download>descarge pdf</a></p>
        <p class="checkb">Para envío de presentación, <a href="pdf/Formato%20Presentacio%CC%81n%20Expositores_v1.pptx" download>descarge pptx</a></p>
        <div class="form-group">
            <label for="auspiciador"><input type="checkbox" class="form-control" id="auspiciador" name="auspiciador" value='<?php echo $formproc->SafeDisplay('auspiciador') ?>'>AUSPICIADOR</label>
        </div>
        <p class="checkb">Para mayor información, contactar al email ana.ulloa@institutolean.cl</p>
    </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <br>
            <label for="message">Mensaje:</label>
            <span id='contactus_message_errorloc' class='error'></span>
            <textarea class="form-control" rows="8" id="message" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
            <span id='contactus_email_errorloc' class='error'></span>
        </div>
    <div id="submitButton"><button id="submit" type="submit" name="Submit" value="Submit" class="btn btn-default">Enviar</button></div>
    </div>
    </div>
</div>
</form>
</div>   
 
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("nombre","req","Por favor ingresar su nombre");

    frmvalidator.addValidation("email","req","Por favor ingresar su email");

    frmvalidator.addValidation("email","email","Por favor ingresar su email");

    frmvalidator.addValidation("message","maxlen=2048","El mensaje es muy largo!(mas que 2KB!)");

// ]]>
</script>
  
    
</body>
</html>

