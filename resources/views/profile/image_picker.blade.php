<!-- Modal -->
<div
    class="modal fade"
    id="myModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModalLabel"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Choose an Image</h4>
            </div>
            <div class="modal-body">
                <div class="row" id="img-list"></div>
                <div class="text-center">
                    <b>
                        <a href="{{ url('/imgs/home') }}">Manage IMGs</a>
                    </b>
                </div>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-default"
                    data-dismiss="modal"
                    id="img-picker-cancel"
                >Cancel</button>
            </div>
        </div>
    </div>
</div>

<div style="display: none;">
    <div
        class="col-xs-4 img"
        id="img-tpl"
    >
        <div></div>
    </div>
</div>