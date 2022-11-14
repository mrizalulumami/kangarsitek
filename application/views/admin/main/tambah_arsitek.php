<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('halaman') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="d-flex">
           
        </div>
        <?php form_open_multipart()?>
        <div class="row mt-2">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Perusahaan</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">WA</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
                </div>
               
                

              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pilih file foto</h5>
                        <div class="row mb-3">

                        <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
            </div>

          
           
        </div><!-- End Right side columns -->
    </section>

</main><!-- End #main -->