    <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
    .container-2{
      display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE; width:35%;
    }
    @media screen and (max-device-width: 1080px) {
      .container-2{
        width: auto;
        max-width: 100%;
      }
    }
  </style>
</head>

<body>
  <?php echo form_open('login/auth'); ?>

  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row container-2">

          <img style="height:60px;" src="<?php echo base_url('assets/img/voting.png'); ?>" >

            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='nis' id="input_text" data-length="18" minlength="1" maxlength="20"  />
                <label for='password'>Nomor Induk Mahasiswa</label>
              </div>

            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue'>Login<i class="material-icons right">send</i></button>
              </div>
            </center>
          </form>
        </div>
      </div>

    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
  <?php echo form_close(); ?>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
