<?php $active="credit"; $page ="Products"; $title = "Letter of Credit - Planet Sayari"; $current_page_url="https://www.planetsayari.com/letter-of-credit";
include_once 'components/header.php'; ?>
<!-- Main Content -->
<div class="main-content">
    <!-- Feature -->
    <div class="col-lg-12">
        <img src="images/letter-credit/logistics.webp" alt="" style="width:100vw;">
    </div>
    <section class="overview-block-pt7 responsive_pad">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <!-- <h5 class="title  iq-mb-10">Partners</h5> -->
                        <h2 class="">Trade Finance Using Blockchain Technology</h2>
                        <!-- <p>Here is 3 Easy Steps to Busy &amp; Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-sm-12 iq-mt-10 align-self-center responsive_para_size">
                    <h5>Planet Sayari aims to cover more than $ 600 million Letter of credit by 2026. And will
                        connect every country with other countries and will establish its business in every country.
                    </h5>
                    <ul class="listing-hand ">
                        <li class="iq-mt-20">Blockchain LC can be modelled as a smart contract between the bank and
                            the seller to. Proven benefits of a blockchain-based solution for letters of credit.
                            Standardizing and digitizing the entire process and using a blockchain-based solution
                            for letters of credit can: Streamline the process end-to-end.</li>
                        <li class="iq-mt-20">Proven benefits of a blockchain-based solution for letters of credit.
                        </li>
                        <li class="iq-mt-20">Standardizing and digitizing the entire process and using a
                            blockchain-based solution for letters of credit can:</li>
                        <li class="iq-mt-20">Streamline the process end-to-end.</li>
                        <li class="iq-mt-20">Eliminate the costs of printing, issuing, exchanging and retrieving
                            physical documents.</li>
                        <li class="iq-mt-20">Reduce the risk of disputes and manual data entry errors.</li>
                        <li class="iq-mt-20">Increase security through encryption and tamper-evident distributed
                            ledger technology.</li>
                        <li class="iq-mt-20">Lessen the risk of fraud with a transparent process auditable by any
                            permissioned participant.</li>
                    </ul>
                </div>
            </div>
            <a class="button mt-4" href="#">
                <span class="button-inner-box">
                    <span class="icon-one icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                            </path>
                        </svg></span>
                    <span class="text-btn" data-bs-toggle="modal" data-bs-target="#GetLetterOfCredit">Get Letter of Credit</span>
                    <span class="icon-two icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                            </path>
                        </svg>
                    </span>
                </span>
            </a>
        </div>
    </section>

    <section class="iq-team2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="animation-img">
                        <img class="img-animation" data-gif_src="images/letter-credit/trade-finance-1.gif" src="images/letter-credit/trade finance.gif"/>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-12 iq-mtb-100">
                    <hr>
                </div>
            </div> -->
        </div>
    </section>



    <div class="col-lg-12">
        <img src="images/letter-credit/future-vission.webp" alt="" style="width:90vw;">
    </div>

    <!-- <div class="row justify-content-center">
        <div class="col-lg-10 col-md-8 text-center">
            <img src="images/Asset 2 2.png" alt="" class="width:50% center">
        </div>
    </div> -->

</div>
<!-- Main Content End -->


<!-- Start Modal -->
<div class="modal fade" id="GetLetterOfCredit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<script>
    const imgElement = document.querySelector('.img-animation');

    imgElement.addEventListener('mouseenter', function() {
        imgElement.dataset.imgSrc = imgElement.src;
        imgElement.src = imgElement.dataset.gif_src;
    });

    imgElement.addEventListener('mouseleave', function() {
        imgElement.src = imgElement.dataset.imgSrc;
    });
</script>
<?php include_once 'components/footer.php' ?>