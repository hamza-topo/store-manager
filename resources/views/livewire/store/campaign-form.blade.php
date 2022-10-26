<div>
    @if ($show)
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">@lang('liste des campaigns')</h5>
            </div>
            <div class="card-body o-hidden">
                <div>

                    <ul class="nav nav-tabs nav-right" id="right-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="right-home-tab" data-bs-toggle="tab"
                                href="#right-home" role="tab" aria-controls="right-home" aria-selected="true"><i
                                    class="icofont icofont-ui-home"></i>Campaign Anniversaire</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-right-tab" data-bs-toggle="tab"
                                href="#right-profile" role="tab" aria-controls="profile-icon" aria-selected="false"><i
                                    class="icofont icofont-man-in-glasses"></i>Campaign Bonjour/Merci</a></li>
                        <li class="nav-item"><a class="nav-link" id="contact-right-tab" data-bs-toggle="tab"
                                href="#right-contact" role="tab" aria-controls="contact-icon" aria-selected="false"><i
                                    class="icofont icofont-contacts"></i>Campaign Client dormant</a></li>
                    </ul>
                    <div class="tab-content" id="right-tabContent">
                        <div class="tab-pane fade show active" id="right-home" role="tabpanel"
                            aria-labelledby="right-home-tab">
                            <x-campaigns.birthday :birthday="$birthday" />
                            <div class="col-12" style="text-align: right;">
                                @if (!isset($birthday['id']))
                                    <button class="btn btn-primary btn-block" type="button" title=""
                                        wire:click='save({{ App\Enums\ModelCampaign::BIRTHDAY }})'>@lang('lang.sauvgarder')</button>
                                @else
                                    <button class="btn btn-primary btn-block" type="button" title=""
                                        wire:click='update({{ $birthday['id'] }},{{ App\Enums\ModelCampaign::BIRTHDAY }})'>Modifier</button>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="right-profile" role="tabpanel"
                            aria-labelledby="profile-right-tab">
                            <button class="btn btn-primary btn-block" type="button" title=""
                                wire:click='save({{ App\Enums\ModelCampaign::WELCOME }})'>sauvgarder</button>
                        </div>
                        <div class="tab-pane fade" id="right-contact" role="tabpanel"
                            aria-labelledby="contact-right-tab">
                            <button class="btn btn-primary btn-block" type="button" title=""
                                wire:click='save({{ App\Enums\ModelCampaign::ZOMBIE }})'>sauvgarder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
