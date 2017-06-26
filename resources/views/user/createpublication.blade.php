
         <div id="type1Modal" class="modal fade pubModal formModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">    
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">

    

                     <div class="clearfix"></div>

                     <form id="type1Form" class="ajax-auth login-form">


                        <div class="wp-social-login-connect-with">Publication Texte</div>
                        
                        <div class="clearfix"></div>

                        <input type="hidden" id="type" name="type" value="type1">


                      <div class="form-group">

                          <label><input type="radio" name="privacy" value="0" checked>Publique</label>
                          <label><input type="radio" name="privacy" value="1">Privée</label>

                      </div>


                      <div class="form-group">

                        <select class="form-control"  name="category" id="category">
                            @foreach ( $cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->{'title_'.config('app.locale')} }}</option>
                            @endforeach                            
                        </select>

                      </div>



                      <div class="form-group">

                        <input class="form-control" id="title" type="text" name="title"  placeholder="Titre">
                        <span class="help-block errorTitle"></span>

                      </div>


                      <div class="form-group">

                        <input class="form-control form-control-inline input-medium default-date-picker" id="deadline" name="deadline" size="16" type="text" placeholder="Date de clôture" />
                        <span class="help-block errorDeadline"></span>

                      </div>

                        
                      <div class="form-group">

                        <textarea class="form-control" id="description" name="description"  placeholder="Description"></textarea>
                        <span class="help-block errorDescription"></span>

                      </div>


                        <button type="button" id="submit" class="submit_button" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Créer</button>


                     </form>

                  </div>
               </div>
            </div>
         </div>



         <div id="type2Modal" class="modal fade pubModal formModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">    
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">

    

                     <div class="clearfix"></div>

                     <form id="type2Form" class="ajax-auth login-form"  enctype="multipart/form-data">


                        <div class="wp-social-login-connect-with">Publication Image</div>
                        
                        <div class="clearfix"></div>

                        <input type="hidden" id="type" name="type" value="type2">


                      <div class="form-group">

                          <label><input type="radio" name="privacy" value="0" checked>Publique</label>
                          <label><input type="radio" name="privacy" value="1">Privée</label>

                      </div>


                      <div class="form-group">

                        <select class="form-control"  name="category" id="category">
                            @foreach ( $cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->{'title_'.config('app.locale')} }}</option>
                            @endforeach                            
                        </select>

                      </div>



                      <div class="form-group">

                        <input class="form-control" id="title" type="text" name="title"  placeholder="Titre">
                        <span class="help-block errorTitle"></span>

                      </div>


                      <div class="form-group">

                        <input class="form-control form-control-inline input-medium default-date-picker" id="deadline" name="deadline" size="16" type="text" placeholder="Date de clôture" />
                        <span class="help-block errorDeadline"></span>

                      </div>





                      <div class="form-group">
                        <label class="col-md-4" style="float: left;font-weight: normal;" for="photo">Image</label>
                        &nbsp;
                        <input class="col-md-6" style="float: left;" type="file" id="photo" name="photo">
                         <span class="help-block errorPhoto"></span>
                      </div>


                        <button type="button" id="submit" class="submit_button" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Créer</button>


                     </form>

                  </div>
               </div>
            </div>
         </div>



        <div id="type3Modal" class="modal fade pubModal formModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">    
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">

    

                     <div class="clearfix"></div>

                     <form id="type3Form" class="ajax-auth login-form" enctype="multipart/form-data">


                        <div class="wp-social-login-connect-with">Publication Texte & Image</div>
                        
                        <div class="clearfix"></div>

                        <input type="hidden" id="type" name="type" value="type3">


                      <div class="form-group">

                          <label><input type="radio" name="privacy" value="0" checked>Publique</label>
                          <label><input type="radio" name="privacy" value="1">Privée</label>

                      </div>


                      <div class="form-group">

                        <select class="form-control"  name="category" id="category">
                            @foreach ( $cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->{'title_'.config('app.locale')} }}</option>
                            @endforeach                            
                        </select>

                      </div>



                      <div class="form-group">

                        <input class="form-control" id="title" type="text" name="title"  placeholder="Titre">
                        <span class="help-block errorTitle"></span>

                      </div>


                      <div class="form-group">

                        <input class="form-control form-control-inline input-medium default-date-picker" id="deadline" name="deadline" size="16" type="text" placeholder="Date de clôture" />
                        <span class="help-block errorDeadline"></span>

                      </div>

                        
                      <div class="form-group">

                        <textarea class="form-control" id="description" name="description"  placeholder="Description"></textarea>
                        <span class="help-block errorDescription"></span>

                      </div>





                      <div class="form-group">
                        <label class="col-md-4" style="float: left;font-weight: normal;" for="photo">Image</label>
                        &nbsp;
                        <input class="col-md-6" style="float: left;" type="file" id="photo" name="photo">
                         <span class="help-block errorPhoto"></span>
                      </div>



                        <button type="button" id="submit" class="submit_button" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Créer</button>


                     </form>

                  </div>
               </div>
            </div>
         </div>







         <div id="type4Modal" class="modal fade pubModal formModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">    
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">

    

                     <div class="clearfix"></div>

                     <form id="type4Form" class="ajax-auth login-form">


                        <div class="wp-social-login-connect-with">Comparaison Texte</div>
                        
                        <div class="clearfix"></div>

                        <input type="hidden" id="type" name="type" value="type4">


                      <div class="form-group">

                          <label><input type="radio" name="privacy" value="0" checked>Publique</label>
                          <label><input type="radio" name="privacy" value="1">Privée</label>

                      </div>


                      <div class="form-group">

                        <select class="form-control"  name="category" id="category">
                            @foreach ( $cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->{'title_'.config('app.locale')} }}</option>
                            @endforeach                            
                        </select>

                      </div>



                      <div class="form-group">

                        <input class="form-control" id="title" type="text" name="title"  placeholder="Titre">
                        <span class="help-block errorTitle"></span>

                      </div>


                      <div class="form-group">

                        <input class="form-control form-control-inline input-medium default-date-picker" id="deadline" name="deadline" size="16" type="text" placeholder="Date de clôture" />
                        <span class="help-block errorDeadline"></span>

                      </div>

                        
                      <div class="form-group">

                        <textarea class="form-control" id="description1" name="description1"  placeholder="Description - choix 1"></textarea>
                        <span class="help-block errorDescription1"></span>

                      </div>


                      <div class="form-group">

                        <textarea class="form-control" id="description2" name="description2"  placeholder="Description - choix 2"></textarea>
                        <span class="help-block errorDescription2"></span>

                      </div>


                        <button type="button" id="submit" class="submit_button" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Créer</button>


                     </form>

                  </div>
               </div>
            </div>
         </div>



         <div id="type5Modal" class="modal fade pubModal formModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">    
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">

    

                     <div class="clearfix"></div>

                     <form id="type5Form" class="ajax-auth login-form"  enctype="multipart/form-data">


                        <div class="wp-social-login-connect-with">Comparaison Image</div>
                        
                        <div class="clearfix"></div>

                        <input type="hidden" id="type" name="type" value="type5">


                      <div class="form-group">

                          <label><input type="radio" name="privacy" value="0" checked>Publique</label>
                          <label><input type="radio" name="privacy" value="1">Privée</label>

                      </div>


                      <div class="form-group">

                        <select class="form-control"  name="category" id="category">
                            @foreach ( $cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->{'title_'.config('app.locale')} }}</option>
                            @endforeach                            
                        </select>

                      </div>



                      <div class="form-group">

                        <input class="form-control" id="title" type="text" name="title"  placeholder="Titre">
                        <span class="help-block errorTitle"></span>

                      </div>


                      <div class="form-group">

                        <input class="form-control form-control-inline input-medium default-date-picker" id="deadline" name="deadline" size="16" type="text" placeholder="Date de clôture" />
                        <span class="help-block errorDeadline"></span>

                      </div>


                      <div class="form-group">
                        <label class="col-md-4" style="float: left;font-weight: normal;" for="photo1">Image - choix1</label>
                        &nbsp;
                        <input class="col-md-6" style="float: left;" type="file" id="photo1" name="photo1">
                         <span class="help-block errorPhoto1"></span>
                      </div>



                      <div class="form-group">
                        <label class="col-md-4" style="float: left;font-weight: normal;" for="photo2">Image - choix2</label>
                        &nbsp;
                        <input class="col-md-6" style="float: left;" type="file" id="photo2" name="photo2">
                         <span class="help-block errorPhoto2"></span>
                      </div>



                        <button type="button" id="submit" class="submit_button" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Créer</button>


                     </form>

                  </div>
               </div>
            </div>
         </div>



        <div id="type6Modal" class="modal fade pubModal formModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">    
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">

    

                     <div class="clearfix"></div>

                     <form id="type6Form" class="ajax-auth login-form" enctype="multipart/form-data">


                        <div class="wp-social-login-connect-with">Comparaison Texte & Image</div>
                        
                        <div class="clearfix"></div>

                        <input type="hidden" id="type" name="type" value="type6">


                      <div class="form-group">

                          <label><input type="radio" name="privacy" value="0" checked>Publique</label>
                          <label><input type="radio" name="privacy" value="1">Privée</label>

                      </div>


                      <div class="form-group">

                        <select class="form-control"  name="category" id="category">
                            @foreach ( $cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->{'title_'.config('app.locale')} }}</option>
                            @endforeach                            
                        </select>

                      </div>



                      <div class="form-group">

                        <input class="form-control" id="title" type="text" name="title"  placeholder="Titre">
                        <span class="help-block errorTitle"></span>

                      </div>


                      <div class="form-group">

                        <input class="form-control form-control-inline input-medium default-date-picker" id="deadline" name="deadline" size="16" type="text" placeholder="Date de clôture" />
                        <span class="help-block errorDeadline"></span>

                      </div>

                        
                      <div class="form-group">

                        <textarea class="form-control" id="description1" name="description1"  placeholder="Description - choix 1"></textarea>
                        <span class="help-block errorDescription1"></span>

                      </div>


                      <div class="form-group">

                        <textarea class="form-control" id="description2" name="description2"  placeholder="Description - choix 2"></textarea>
                        <span class="help-block errorDescription2"></span>

                      </div>





                      <div class="form-group">
                        <label class="col-md-4" style="float: left;font-weight: normal;" for="photo1">Image - choix1</label>
                        &nbsp;
                        <input class="col-md-6" style="float: left;" type="file" id="photo1" name="photo1">
                         <span class="help-block errorPhoto1"></span>
                      </div>



                      <div class="form-group">
                        <label class="col-md-4" style="float: left;font-weight: normal;" for="photo2">Image - choix2</label>
                        &nbsp;
                        <input class="col-md-6" style="float: left;" type="file" id="photo2" name="photo2">
                         <span class="help-block errorPhoto2"></span>
                      </div>





                        <button type="button" id="submit" class="submit_button" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Créer</button>


                     </form>

                  </div>
               </div>
            </div>
         </div>






