
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <div class="main wf-section">
    <div class="hero-section denuncias">
      <div id="w-node-_2bbde7e4-8d81-3aaa-1f12-f9e9243ec018-24ea0191" class="hero_text-container"><img src="<?php echo udesly_get_image(_u('i37b2416', 'img'))->src ?>" loading="lazy" id="w-node-_2bbde7e4-8d81-3aaa-1f12-f9e9243ec019-24ea0191" alt="<?php echo udesly_get_image(_u('i37b2416', 'img'))->alt ?>" class="hero_text-bg" data-img="i37b2416" srcset="<?php echo udesly_get_image(_u('i37b2416', 'img'))->srcset ?>">
        <div id="w-node-_2bbde7e4-8d81-3aaa-1f12-f9e9243ec01a-24ea0191" class="hero_text alt">
          <h1 class="main-h1" data-text="tn244a445a"><?php echo _u('tn244a445a','text'); ?></h1>
          <p class="paragraph" data-text="t60bcc3e6"><?php echo _u('t60bcc3e6','text'); ?></p>
        </div>
      </div>
      <div id="w-node-_2bbde7e4-8d81-3aaa-1f12-f9e9243ec021-24ea0191" class="hero_img denuncias"><img src="<?php echo udesly_get_image(_u('i71185fac', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i71185fac', 'img'))->alt ?>" class="hero_sun" data-img="i71185fac" srcset="<?php echo udesly_get_image(_u('i71185fac', 'img'))->srcset ?>"></div>
    </div>
    <div class="main-section">
      <div class="content-container form">
        <div class="w-form">
          <form id="wf-form-Denunciar" name="wf-form-Denunciar" data-name="Denunciar" method="get" data-ajax-action="contact">
            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="multistep-tabs w-tabs">
              <div class="multistep-tabs-menu w-tab-menu">
                <a data-w-tab="Tab 1" class="w-inline-block w-tab-link w--current" data-link="a3fbe8166" href="<?php echo _u('a3fbe8166','link'); ?>">
                  <div>Tab 1</div>
                </a>
                <a data-w-tab="Tab 2" class="w-inline-block w-tab-link" data-link="a3fbe8166" href="<?php echo _u('a3fbe8166','link'); ?>">
                  <div>Tab 2</div>
                </a>
              </div>
              <div class="multistep-tabs-content w-tab-content">
                <div data-w-tab="Tab 1" class="multistep-tab-pane w-tab-pane w--tab-active">
                  <h2>Información General</h2>
                  <div class="form-denuncia">
                    <div class="form-field_container"><label for="contact[nombre]" class="field-label">Nombre y apellido<span class="texto-rosa">*</span></label><input type="text" class="form-field w-input" maxlength="256" name="contact[nombre]" data-name="Nombre" placeholder="" id="Nombre" required=""></div>
                    <div class="form-field_container"><label for="contact[nacionalidad]" class="field-label">Nacionalidad<span class="texto-rosa">*</span></label><input type="text" class="form-field w-input" maxlength="256" name="contact[nacionalidad]" data-name="Nacionalidad" placeholder="" id="Nacionalidad" required=""></div>
                    <div class="form-field_container"><label for="contact[cedula]" class="field-label">Número de cédula<span class="texto-rosa">*</span></label><input type="number" class="form-field w-input" maxlength="256" name="contact[cedula]" data-name="Cedula" placeholder="" id="Cedula" required=""></div>
                    <div class="form-field_container"><label for="Date" class="field-label">Fecha de nacimiento<span class="texto-rosa">*</span></label>
                      <div class="selector-fecha_wrapper"><input type="text" class="selector-fecha w-input" autocomplete="off" maxlength="256" name="contact[fecha-de-nacimiento]" data-name="Fecha de nacimiento" placeholder="Seleccionar fecha" data-toggle="datepicker" id="Fecha-de-nacimiento" required=""><img loading="lazy" src="<?php echo udesly_get_image(_u('in3846ddc2', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('in3846ddc2', 'img'))->alt ?>" class="field-icon" data-img="in3846ddc2" srcset="<?php echo udesly_get_image(_u('in3846ddc2', 'img'))->srcset ?>"></div>
                    </div>
                    <div class="form-field_container"><label for="contact[telefono]" class="field-label">Teléfono<span class="texto-rosa">*</span></label><input type="number" class="form-field w-input" maxlength="256" name="contact[telefono]" data-name="Telefono" placeholder="" id="Telefono"></div>
                    <div class="form-field_container"><label for="correo" class="field-label">Correo electrónico<span class="texto-rosa">*</span></label><input type="email" class="form-field w-input" maxlength="256" name="contact[email]" data-name="Correo" placeholder="" id="Correo" required=""></div><input type="submit" value="Continuar" data-wait="Un momento, por favor" id="w-node-df43ecf2-0524-1e94-a8f9-03de968897b9-24ea0191" class="button form next-button w-button">
                  </div>
                </div>
                <div data-w-tab="Tab 2" class="multistep-tab-pane w-tab-pane">
                  <h2>Relato de los hechos</h2>
                  <div id="w-node-bed4496b-dd63-4d05-0306-275cd7009172-24ea0191" class="form-cont-section">
                    <div class="form-denuncia">
                      <div class="form-field_container"><label for="contact[ciudad-del-hecho]" class="field-label">Ciudad donde ocurrió el hecho<span class="texto-rosa">*</span></label><input type="text" class="form-field w-input" maxlength="256" name="contact[ciudad-del-hecho]" data-name="Ciudad del Hecho" placeholder="" id="Ciudad-del-Hecho" required=""></div>
                      <div class="form-field_container"><label for="Date" class="field-label">Fecha y horario del suceso<span class="texto-rosa">*</span></label>
                        <div class="selector-fecha_wrapper"><input type="text" class="selector-fecha w-input" autocomplete="off" maxlength="256" name="contact[fecha-del-suceso]" data-name="fecha-del-suceso" placeholder="Seleccionar fecha" data-toggle="datepicker" id="fecha-del-suceso-2" required=""><img loading="lazy" src="<?php echo udesly_get_image(_u('in3846ddc2', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('in3846ddc2', 'img'))->alt ?>" class="field-icon" data-img="in3846ddc2" srcset="<?php echo udesly_get_image(_u('in3846ddc2', 'img'))->srcset ?>"></div>
                      </div>
                      <div id="w-node-_138de614-f282-4d15-3c1d-a4a883df936b-24ea0191" class="form-field_container"><label for="Cedula-2" class="field-label">¿Eres la persona afectada?<span class="texto-rosa">*</span></label><label id="affected-si" class="w-radio">
                          <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input type="radio" id="yes" name="contact[affectedperson]" value="yes" data-name="affectedPerson" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="yes">Sí</span>
                        </label><label id="affected-no" class="w-radio">
                          <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input type="radio" id="no-2" name="contact[affectedperson]" value="no" data-name="affectedPerson" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="no-2">No</span>
                        </label></div>
                      <div id="w-node-a80e8398-40b1-e0d0-e2b6-e00d69c64804-24ea0191" class="form-field_container"><label for="textarea-relato" class="field-label">Tu relato<span class="texto-rosa">*</span></label><textarea id="textarea-relato" name="contact[relato]" maxlength="5000" data-name="field" placeholder="Brevemente, indiquenos que fue lo sucedido. Le sugerimos incluir cómo y en que contexto ocurrió, si realizó la denuncia formal y ante qué institución, y si cuenta o no con documentación respaldatoria" required="" class="form-field textarea-relato w-input"></textarea></div>
                    </div>
                    <div class="div-block">
                      <a id="link-back" href="<?php echo _u('a23','link'); ?>" class="link backform" data-link="a23">Volver</a><input type="submit" id="Submit" value="Enviar denuncia" data-wait="Please wait..." class="button form w-button">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php udesly_honeypot_field() ?></form>
          <div class="success-message w-form-done">
            <div><img src="<?php echo udesly_get_image(_u('i13946645', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i13946645', 'img'))->alt ?>" class="image-3" data-img="i13946645" srcset="<?php echo udesly_get_image(_u('i13946645', 'img'))->srcset ?>">
              <h2 data-text="t4db23497"><?php echo _u('t4db23497','text'); ?></h2>
              <p data-text="tne252b92"><?php echo _u('tne252b92','text'); ?></p>
            </div>
          </div>
          <div class="error-message w-form-fail">
            <div data-text="t6ab027b3"><?php echo _u('t6ab027b3','text'); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  <script type="text/javascript">var $ = window.jQuery;</script><script src="<?php echo get_template_directory_uri(); ?>/assets/js/webflow.js?v=1672367323" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  