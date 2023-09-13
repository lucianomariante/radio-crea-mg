<div class="elementor-element elementor-element-63a4fe2 e-con-boxed e-con" data-id="63a4fe2" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" elementor-template="">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-3407e7a e-con-boxed e-con" data-id="3407e7a" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
				<div class="e-con-inner">
				<div class="elementor-element elementor-element-6e4559e elementor-widget elementor-widget-template" data-id="6e4559e" data-element_type="widget" data-widget_type="template.default">
				<div class="elementor-widget-container">
				<div class="elementor-template">
				<div data-elementor-type="section" data-elementor-id="729" class="elementor elementor-729">
					<div class="elementor-element elementor-element-85155a6 e-con-boxed e-con" data-id="85155a6" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
				<div class="e-con-inner">
					<div class="elementor-element elementor-element-a3d82c3 e-con-full e-con" data-id="a3d82c3" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
						<div class="elementor-element elementor-element-78f9b0b e-con-full e-con" data-id="78f9b0b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="elementor-element elementor-element-07fbe5b elementor-view-default elementor-widget elementor-widget-icon" data-id="07fbe5b" data-element_type="widget" data-widget_type="icon.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-wrapper">						
										<a href="javascript:tocar_radio();">
											<div class="elementor-icon">
												<svg aria-hidden="true" alt="Ouvir a Rádio" title="Ouvir a Rádio" class="e-font-icon-svg e-fas-play-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path></svg> 
											</div>
										</a>
										<audio id="audio" src="<?= $vo_configuracoes_radio['dados'][0]['CFGSTREAM'];?>"></audio>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-d98ffb3 e-con-full e-con" data-id="d98ffb3" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="elementor-element elementor-element-31c5015 elementor-view-default elementor-widget elementor-widget-icon" data-id="31c5015" data-element_type="widget" data-widget_type="icon.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-wrapper">
										<a href="javascript:parar_audio();">
											<div class="elementor-icon">
												<svg aria-hidden="true" alt="Pausar a Rádio" title="Pausar a Rádio" class="e-font-icon-svg e-fas-pause-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm-16 328c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v160zm112 0c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v160z"></path></svg> 
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-8a12cc8 e-con-full e-con" data-id="8a12cc8" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
						<div class="elementor-element elementor-element-1d20d1a e-con-full e-con" data-id="1d20d1a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="elementor-element elementor-element-7d5605d elementor-view-default elementor-widget elementor-widget-icon" data-id="7d5605d" data-element_type="widget" data-widget_type="icon.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-wrapper">
										
											<div class="elementor-icon">
												<a id="volume" href="javascript:baixar_volume();">
												<svg aria-hidden="true" alt="Volume" title="Volume" class="e-font-icon-svg e-fas-volume-up" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.03 71.05L126.06 160H24c-13.26 0-24 10.74-24 24v144c0 13.25 10.74 24 24 24h102.06l88.97 88.95c15.03 15.03 40.97 4.47 40.97-16.97V88.02c0-21.46-25.96-31.98-40.97-16.97zm233.32-51.08c-11.17-7.33-26.18-4.24-33.51 6.95-7.34 11.17-4.22 26.18 6.95 33.51 66.27 43.49 105.82 116.6 105.82 195.58 0 78.98-39.55 152.09-105.82 195.58-11.17 7.32-14.29 22.34-6.95 33.5 7.04 10.71 21.93 14.56 33.51 6.95C528.27 439.58 576 351.33 576 256S528.27 72.43 448.35 19.97zM480 256c0-63.53-32.06-121.94-85.77-156.24-11.19-7.14-26.03-3.82-33.12 7.46s-3.78 26.21 7.41 33.36C408.27 165.97 432 209.11 432 256s-23.73 90.03-63.48 115.42c-11.19 7.14-14.5 22.07-7.41 33.36 6.51 10.36 21.12 15.14 33.12 7.46C447.94 377.94 480 319.54 480 256zm-141.77-76.87c-11.58-6.33-26.19-2.16-32.61 9.45-6.39 11.61-2.16 26.2 9.45 32.61C327.98 228.28 336 241.63 336 256c0 14.38-8.02 27.72-20.92 34.81-11.61 6.41-15.84 21-9.45 32.61 6.43 11.66 21.05 15.8 32.61 9.45 28.23-15.55 45.77-45 45.77-76.88s-17.54-61.32-45.78-76.86z"></path></svg> 
												</a>
											</div>																				
										<!--<input id="controle_volume" type="range" value="50" orient="vertical">
										<div id="tempo_transcorrido" class="col align-self-center" style="color:#949494">
											<input id="tempo" type="range" value="100">
										</div>-->
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-fda7001 e-con-full e-con" data-id="fda7001" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="elementor-element elementor-element-5d28a85 elementor-widget elementor-widget-progress" data-id="5d28a85" data-element_type="widget" data-widget_type="progress.default">
								<div class="elementor-widget-container">
									<style>/*! elementor - v3.11.5 - 14-03-2023 */
									.elementor-widget-progress{text-align:left}.elementor-progress-wrapper{position:relative;background-color:#eee;color:#fff;height:100%;border-radius:2px}.elementor-progress-bar{display:flex;background-color:#818a91;width:0;font-size:11px;height:30px;line-height:30px;border-radius:2px;transition:width 1s ease-in-out}.elementor-progress-text{flex-grow:1;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;padding-left:15px}.elementor-progress-percentage{padding-right:15px}.elementor-widget-progress .elementor-progress-wrapper.progress-info .elementor-progress-bar{background-color:#5bc0de}.elementor-widget-progress .elementor-progress-wrapper.progress-success .elementor-progress-bar{background-color:#5cb85c}.elementor-widget-progress .elementor-progress-wrapper.progress-warning .elementor-progress-bar{background-color:#f0ad4e}.elementor-widget-progress .elementor-progress-wrapper.progress-danger .elementor-progress-bar{background-color:#d9534f}.elementor-progress .elementor-title{display:block}@media (max-width:767px){.elementor-progress-text{padding-left:10px}}.e-con-inner .elementor-progress-wrapper,.e-con .elementor-progress-wrapper{height:auto}
									</style>
									<div class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="34" aria-valuetext="">
										<div class="elementor-progress-bar" data-max="34">
											<span class="elementor-progress-text"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="elementor-element elementor-element-2c3bf34 e-con-full e-con" data-id="2c3bf34" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="elementor-element elementor-element-5c9c974 elementor-widget elementor-widget-heading" data-id="5c9c974" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
								<style>/*! elementor - v3.11.5 - 14-03-2023 */
								.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
								</style>
								<h2 class="elementor-heading-title elementor-size-default">No Ar:</h2> 
								<div id="no_ar_conteiner" class="elementor-heading-title elementor-size-default">
									<div><br/>    
										<div id="musica_no_ar">Programação</div><br/>
										<div id="artista_no_ar"><div>Rádio CRA-MG</div></div>
									</div>
								</div>
								</div>			
							</div>
						</div>
						<div class="elementor-element elementor-element-0cdf98f e-con-full e-con" data-id="0cdf98f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="elementor-element elementor-element-54e4a80 elementor-widget elementor-widget-heading" data-id="54e4a80" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">A Seguir:</h2> 
									<div id="a_seguir_conteiner" class="elementor-heading-title elementor-size-default">
										<div><br/>
											<div id="musica_a_seguir"><div>Hora Certa</div></div><br/>
											<div id="artista_a_seguir"><div>Rádio TJMG</div></div>
										</div>
									</div>
								</div>			
							</div>
						</div>
					</div>
				</div>
			</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>