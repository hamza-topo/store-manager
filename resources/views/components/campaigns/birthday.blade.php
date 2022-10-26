<div>
    <div class="mb-3">
        <label class="col-form-label" for="exampleInputEmail1">Message de 2 jours avant</label>
        <textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message" wire:model.lazy='birthday.messages.0'></textarea>
    </div>
    <div class="mb-3">
        <label class="col-form-label" for="exampleInputEmail1">Message de 1 jour avant</label>
        <textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message" wire:model.lazy='birthday.messages.1'></textarea>
    </div>
    <div class="mb-3">
        <label class="col-form-label" for="exampleInputEmail1">Message de  jour d'anniversaire</label>
        <textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message" wire:model.lazy='birthday.messages.2'></textarea>
    </div>
</div>