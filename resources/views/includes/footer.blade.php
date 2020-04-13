<section class="section bg-image overlay" style="background-image: url(#);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left">
                <h2 class="text-white font-weight-bold">@lang('texts.footer_prgrph')</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserve-now">
                  @lang('texts.book_now')
                </button>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="reserve-now" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">@lang('texts.book_now')</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="#" role="button" class="btn btn-primary">@lang('texts.book_for_travellers')</a>
                <a href="#" role="button" class="btn btn-primary">@lang('texts.book_for_groups')</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('texts.close')</button>
            </div>
        </div>
    </div>
</div>