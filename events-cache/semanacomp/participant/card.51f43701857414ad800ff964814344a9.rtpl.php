<?php if(!class_exists('Rain\Tpl')){exit;}?><script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script type="text/javascript">

Mercadopago.setPublishableKey("TEST-44e4aa61-5191-4f03-98dc-5ff1f0ce05d5");

</script>

<!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="/res/admin/dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo htmlspecialchars( $participant["pname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/res/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  
                  <small>Membro desde <?php echo htmlspecialchars( $participant["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">
                  <a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel/<?php echo htmlspecialchars( $participant["idparticipant"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-default btn-flat">Editar dados</a>
                </div>
                
                <div class="pull-right">
                  <a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
      
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/payment"><i class="fa fa-bookmark"></i> <span>Pagamento</span></a></li>
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel/subactivities/"><i class="fa fa-bookmark"></i> <span>Atividades</span></a></li>
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel/submit/"><i class="fa fa-briefcase"></i> <span>Submeter</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Home
    </h1>
    <ol class="breadcrumb">
      <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>

  <!-- Main content -->
   <section class="content">


  <div class="row">

    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">



             <form role="form" action="" method="post" id="pay" name="pay" >
               <div class="box-body">
                 <?php if( $msgError!='' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $msgError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                  
                     <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="email" class="form-control" id="desname" name="email" value="" class="form-control input-lg" type="text" placeholder="E-mail de cadastro">
                    </div>
                     

                    <div class="form-group">
                      <label for="cardNumber">Número do cartão de crédito</label>
                      <input type="text" id="cardNumber" data-checkout="cardNumber"  class="form-control input-lg" type="text" placeholder="4509 9535 6623 3704">
                    </div>

                    <div class="form-group">
                      <label for="securityCode">Código</label>
                      <input type="text" id="securityCode" data-checkout="securityCode" placeholder="123" class="form-control input-lg">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="cardExpirationMonth">Mês vencimento</label>
                      <input type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="12"  class="form-control input-lg">
                    </div> 

                    <div class="form-group col-md-6">
                      <label for="cardExpirationYear">Ano vencimento</label>
                      <input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="2015" class="form-control input-lg">
                    </div>      
                  

                     <div class="form-group">
                      <label for="cardholderName">Nome impresso no cartão</label>
                      <input type="text" id="cardholderName" data-checkout="cardholderName" placeholder="" class="form-control input-lg">
                    </div>

                    
                      <input data-checkout="docType" class="form-control input-lg" type="hidden" value="CPF">
                 

                    <div class="form-group">
                      <label for="docNumber">CPF</label>
                      <input type="text" id="docNumber" data-checkout="docNumber" placeholder="12345678" class="form-control input-lg">
                    </div>

                    <input type="hidden" id="amount" name="amount" value="<?php echo htmlspecialchars( $event["price"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" />

                      <div class="for-group">
                          <label for="installments">Parcelas:</label>
                          <select class="form-control" id="installments" name="installments"></select>
                      
                    
                        <!--   <label for="issuer">Issuer:</label> -->
                          <select id="issuer" name="issuer" disabled style="display: none"></select>
                     
                      </div>
                  <div class="box-footer">
                    <button id ="pay" type="submit" class="btn btn-success">Pagar</button>
                  </div>

             </form>
        </div>
      </div>
    </div>
 </div>
</section>
</div>

<script>
  function addEvent(el, eventName, handler){
    if (el.addEventListener) {
           el.addEventListener(eventName, handler);
    } else {
        el.attachEvent('on' + eventName, function(){
          handler.call(el);
        });
    }
};
function getBin() {
    var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
    return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
};

function guessingPaymentMethod(event) {
    var bin = getBin();

    if (event.type == "keyup") {
        if (bin.length >= 6) {
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    } else {
        setTimeout(function() {
            if (bin.length >= 6) {
                Mercadopago.getPaymentMethod({
                    "bin": bin
                }, setPaymentMethodInfo);
            }
        }, 100);
    }
};

function setPaymentMethodInfo(status, response) {
    if (status == 200) {
        // do somethings ex: show logo of the payment method
        var form = document.querySelector('#pay');

        if (document.querySelector("input[name=paymentMethodId]") == null) {
            var paymentMethod = document.createElement('input');
            paymentMethod.setAttribute('name', "paymentMethodId");
            paymentMethod.setAttribute('type', "hidden");
            paymentMethod.setAttribute('value', response[0].id);

            form.appendChild(paymentMethod);
        } else {
            document.querySelector("input[name=paymentMethodId]").value = response[0].id;
        }
    }
};

addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);

doSubmit = false;
addEvent(document.querySelector('#pay'),'submit',doPay);
function doPay(event){
    event.preventDefault();
    if(!doSubmit){
        var $form = document.querySelector('#pay');
        
        Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below

        return false;
    }
};

function sdkResponseHandler(status, response) {
    if (status != 200 && status != 201) {
        alert("Verifique os campos corretamente!");
    }else{
       
        var form = document.querySelector('#pay');

        var card = document.createElement('input');
        card.setAttribute('name',"token");
        card.setAttribute('type',"hidden");
        card.setAttribute('value',response.id);
        form.appendChild(card);
        doSubmit=true;
        form.submit();
    }
};

function getBin() {
    var cardSelector = document.querySelector("#cardId");
    if (cardSelector && cardSelector[cardSelector.options.selectedIndex].value != "-1") {
        return cardSelector[cardSelector.options.selectedIndex].getAttribute('first_six_digits');
    }
    var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
    return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
}

function clearOptions() {
    var bin = getBin();
    if (bin.length == 0) {
        document.querySelector("#issuer").style.display = 'none';
        document.querySelector("#issuer").innerHTML = "";

        var selectorInstallments = document.querySelector("#installments"),
            fragment = document.createDocumentFragment(),
            option = new Option("Choose...", '-1');

        selectorInstallments.options.length = 0;
        fragment.appendChild(option);
        selectorInstallments.appendChild(fragment);
        selectorInstallments.setAttribute('disabled', 'disabled');
    }
}

function guessingPaymentMethod(event) {
    var bin = getBin(),
        amount = document.querySelector('#amount').value;
    if (event.type == "keyup") {
        if (bin.length == 6) {
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    } else {
        setTimeout(function() {
            if (bin.length >= 6) {
                Mercadopago.getPaymentMethod({
                    "bin": bin
                }, setPaymentMethodInfo);
            }
        }, 100);
    }
};

function setPaymentMethodInfo(status, response) {
    if (status == 200) {
        // do somethings ex: show logo of the payment method
        var form = document.querySelector('#pay');

        if (document.querySelector("input[name=paymentMethodId]") == null) {
            var paymentMethod = document.createElement('input');
            paymentMethod.setAttribute('name', "paymentMethodId");
            paymentMethod.setAttribute('type', "hidden");
            paymentMethod.setAttribute('value', response[0].id);
            form.appendChild(paymentMethod);
        } else {
            document.querySelector("input[name=paymentMethodId]").value = response[0].id;
        }

        // check if the security code (ex: Tarshop) is required
        var cardConfiguration = response[0].settings,
            bin = getBin(),
            amount = document.querySelector('#amount').value;

        for (var index = 0; index < cardConfiguration.length; index++) {
            if (bin.match(cardConfiguration[index].bin.pattern) != null && cardConfiguration[index].security_code.length == 0) {
                /*
                * In this case you do not need the Security code. You can hide the input.
                */
            } else {
                /*
                * In this case you NEED the Security code. You MUST show the input.
                */
            }
        }

        Mercadopago.getInstallments({
            "bin": bin,
            "amount": amount
        }, setInstallmentInfo);

        // check if the issuer is necessary to pay
        var issuerMandatory = false,
            additionalInfo = response[0].additional_info_needed;

        for (var i = 0; i < additionalInfo.length; i++) {
            if (additionalInfo[i] == "issuer_id") {
                issuerMandatory = true;
            }
        };
        if (issuerMandatory) {
            Mercadopago.getIssuers(response[0].id, showCardIssuers);
            addEvent(document.querySelector('#issuer'), 'change', setInstallmentsByIssuerId);
        } else {
            document.querySelector("#issuer").style.display = 'none';
            document.querySelector("#issuer").options.length = 0;
        }
    }
};

function showCardIssuers(status, issuers) {
    var issuersSelector = document.querySelector("#issuer"),
        fragment = document.createDocumentFragment();

    issuersSelector.options.length = 0;
    var option = new Option("Choose...", '-1');
    fragment.appendChild(option);

    for (var i = 0; i < issuers.length; i++) {
        if (issuers[i].name != "default") {
            option = new Option(issuers[i].name, issuers[i].id);
        } else {
            option = new Option("Otro", issuers[i].id);
        }
        fragment.appendChild(option);
    }
    issuersSelector.appendChild(fragment);
    issuersSelector.removeAttribute('disabled');
    document.querySelector("#issuer").removeAttribute('style');
};

function setInstallmentsByIssuerId(status, response) {
    var issuerId = document.querySelector('#issuer').value,
        amount = document.querySelector('#amount').value;

    if (issuerId === '-1') {
        return;
    }

    Mercadopago.getInstallments({
        "bin": getBin(),
        "amount": amount,
        "issuer_id": issuerId
    }, setInstallmentInfo);
};

function setInstallmentInfo(status, response) {
    var selectorInstallments = document.querySelector("#installments"),
        fragment = document.createDocumentFragment();

    selectorInstallments.options.length = 0;

    if (response.length > 0) {
        var option = new Option("Choose...", '-1'),
            payerCosts = response[0].payer_costs;

        fragment.appendChild(option);
        for (var i = 0; i < payerCosts.length; i++) {
            option = new Option(payerCosts[i].recommended_message || payerCosts[i].installments, payerCosts[i].installments);
            fragment.appendChild(option);
        }
        selectorInstallments.appendChild(fragment);
        selectorInstallments.removeAttribute('disabled');
    }
};

function cardsHandler() {
    clearOptions();
    var cardSelector = document.querySelector("#cardId"),
        amount = document.querySelector('#amount').value;

    if (cardSelector && cardSelector[cardSelector.options.selectedIndex].value != "-1") {
        var _bin = cardSelector[cardSelector.options.selectedIndex].getAttribute("first_six_digits");
        Mercadopago.getPaymentMethod({
            "bin": _bin
        }, setPaymentMethodInfo);
    }
}

addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', clearOptions);
addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);
cardsHandler();



</script>