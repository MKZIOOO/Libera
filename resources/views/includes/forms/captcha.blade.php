<div class="form-group">
	<div class="captcha">
		{!! Captcha::img() !!}
	</div>
	<input type="text" id="captcha" name="captcha" placeholder="Enter Captcha">
	<button type="submit">Go</button> 
	@error('captcha')
	<div class="error">
		<small class="text-danger">{{ $errors->first('captcha') }}</small>
	</div>
	@enderror
</div>