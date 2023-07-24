<section class="suscribe_mail">
    <div class="contenedor">
        <div class="row">
            <div class="col-half-news">
                <img 
                src="<?php echo get_field('imagen_seccion_novedades','option')['url'] ?>" 
                title="<?php echo get_field('imagen_seccion_novedades','option')['title'] ?>" 
                alt="<?php echo get_field('imagen_seccion_novedades','option')['alt'] ?>" 
                loading="lazy">
            </div>
            <div class="col-half-news">
                <?php echo get_field('titulo_seccion_novedades','option') ?>
                <div class="shadow">
                    <!-- FORM -->
                    <div
		            	id="mlb2-3413642"
		            	class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-3413642">
		            	<div class="ml-form-align-center">
		            		<div class="ml-form-embedWrapper embedForm">
		            			<div
		            				class="ml-form-embedBody ml-form-embedBodyDefault row-form">
		            				<div class="ml-form-embedContent">
		            					<h4></h4>
		            					<p>Suscríbete por correo</p>
		            				</div>
		            				<form
		            					class="ml-block-form"
		            					action="https://assets.mailerlite.com/jsonp/193401/forms/79553739175757049/subscribe"
		            					data-code=""
		            					method="post"
		            					target="_blank">
		            					<div class="ml-form-formContent">
		            						<div class="ml-form-fieldRow">
		            							<div
		            								class="ml-field-group ml-field-name ml-validate-required">
		            								<!-- input -->
		            								<input
		            									aria-label="name"
		            									aria-required="true"
		            									type="text"
		            									class="form-control"
		            									data-inputmask=""
		            									name="fields[name]"
		            									placeholder="Nombres y apellidos*"
		            									autocomplete="name" />
		            							</div>
		            						</div>
		            						<div class="ml-form-fieldRow ml-last-item">
		            							<div
		            								class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
		            								<!-- input -->
		            								<input
		            									aria-label="email"
		            									aria-required="true"
		            									type="email"
		            									class="form-control"
		            									data-inputmask=""
		            									name="fields[email]"
		            									placeholder="Email*"
		            									autocomplete="email" />
		            							</div>
		            						</div>
		            					</div>
		            					<input type="hidden" name="ml-submit" value="1" />
		            					<div class="ml-form-embedSubmit">
		            						<button type="submit" class="primary custom blue">
		            						    <p>Suscribirme al newsletter</p>
                                                <div>
                                                    <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg" style="fill:white">
                                                        <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z"/>
                                                        <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z"/>
                                                    </svg>
                                                </div>
		            						</button>
		            						<button
		            							disabled="disabled"
		            							style="display: none"
		            							type="button"
		            							class="loading">
		            							<div class="ml-form-embedSubmitLoad"></div>
		            							<span class="sr-only">Loading...</span>
		            						</button>
		            					</div>
		            					<input type="hidden" name="anticsrf" value="true" />
		            				</form>
		            			</div>
		            			<div
		            				class="ml-form-successBody row-success"
		            				style="display: none">
		            				<div class="ml-form-successContent">
		            					<h4>¡Gracias!</h4>
		            					<p>Revisa tu correo, ¡te hemos dado la bienvenida!</p>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            </div>
		            <!-- FORM -->
                </div>
            </div>
        </div>
    </div>
</section>