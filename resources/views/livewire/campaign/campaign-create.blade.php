<div>
    <x-campaign.name :campaign="$campaign"></x-campaign.name>
    <x-campaign.type :campaign="$campaign"></x-campaign.type>
    <x-campaign.is-bulk :campaign="$campaign"></x-campaign.is-bulk>
    <x-campaign.stores :campaign="$campaign"></x-campaign.stores>
    <div style='display: {{  $campaign['is_bulk']== 1 ? "block":"none"}} '>
        <x-campaign.every-date :campaign="$campaign"></x-campaign.every-date>
        <x-campaign.customer-gender :campaign="$campaign"></x-campaign.customer-gender>
        <x-campaign.customer-age :campaign="$campaign"></x-campaign.customer-age>
        <x-campaign.reduction :campaign="$campaign"></x-campaign.reduction>
        <x-campaign.affected-customer :campaign="$campaign"></x-campaign.affected-customer>
        <x-campaign.is-birthday :campaign="$campaign"></x-campaign.is-birthday>
        <x-campaign.birthday-reminder :campaign="$campaign"></x-campaign.birthday-reminder>
        <x-campaign.is-cross-selling :campaign="$campaign"></x-campaign.is-cross-selling>
        <div style='display: {{  isset($campaign['criteria']['is_cross_selling']) && $campaign['criteria']['is_cross_selling'] == 1 ? "block":"none"}} '>
            <x-campaign.products :campaign="$campaign"></x-campaign.products>
        </div>
    </div>
    <div style='display: {{  $campaign['is_bulk']== 1 ? "none":"block"}} '>
        <x-campaign.after-action :campaign="$campaign"></x-campaign.after-action>
        <x-campaign.unique-message :campaign="$campaign"></x-campaign.unique-message>
    </div>
    <x-button.main-button :element='$campaign'></x-button.main-button>
</div>