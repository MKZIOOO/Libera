<header>
	<div class="navbar">
		<a href="{{ route('home') }}" class="logo">
			<div class="logo-image">
				<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAg4AAAB6CAYAAADXl9vHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1MzNmYzVkMy0wZTBlLWZjNGQtOWI2ZS1iZjRhZDlhNmZhMDUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6REM1N0VCOTRBQUI2MTFFQzgyODM4QzdDNDk5QUUxRTciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6REM1N0VCOTNBQUI2MTFFQzgyODM4QzdDNDk5QUUxRTciIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjUzM2ZjNWQzLTBlMGUtZmM0ZC05YjZlLWJmNGFkOWE2ZmEwNSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1MzNmYzVkMy0wZTBlLWZjNGQtOWI2ZS1iZjRhZDlhNmZhMDUiLz4gPC9y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" width="265px" height="80px">
			</div>
		</a>
		<div class="nav-top">
			<div class="nav-links">
			    <a href="/" class="nav-link">Home</a>
				<div class="nav-link-divider"></div>
				<a href="{{ route('conversations') }}" class="nav-link">messages <span class="nav-count">{{ auth()->user()->totalUnreadMessages() }}</span></a>
				<div class="nav-link-divider"></div>
				<a href="{{ route('favorites') }}" class="nav-link">favorites <span class="nav-count">{{ auth()->user()->totalFavorites() }}</span></a>
				<div class="nav-link-divider"></div>
				<a href="{{ route('notifications') }}" class="nav-link">notifications <span class="nav-count">{{ auth()->user()->totalUnreadNotifications() }}</span></a>
				<div class="nav-link-divider"></div>
				<a href="{{ route('orders', ['status' => 'all']) }}" class="nav-link">orders</a>
				<div class="nav-link-divider"></div>
				@seller
				<a href="{{ route('sales', ['status' => 'all']) }}" class="nav-link">sales</a>
				<div class="nav-link-divider"></div>
				@endseller
				<a href="#" class="nav-link">1 XMR ≅ {{ \App\Tools\Converter::currencyConverter(\App\Tools\Converter::moneroLastPrice(), auth()->user()->currency) }} {{ \App\Tools\Converter::getSymbol(auth()->user()->currency) }}</span></a>
	            @staff
	            <div class="nav-link-divider"></div>
	            <a href="{{ route('staff.products') }}" class="nav-link">Staff dashboard</a>
	            @endstaff
			</div>
			<a href="{{ route('about') }}" class="nav-banner">
				<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAAoACgDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9zKVEMjBVBZj0AGSaTrXyl+0h+1n8I9Z+N03hvxX45jv/AAj4L0i7n1/RdMu51ivtZN5BbWunTeRg6jMyrfINNR3G+OTz4HbyPL0bMz6auvG2i2HipNCn1nR4NckjMqabJexJeOgGdwhLbyuO+MVqSRtE5VlKsOoIwa/JX4t+AtJ/a2gvPDc3i7Rfgz4BuJTcWvh/wD4Pl1iUybim2QaDEUO5Qsgdr8yq7MHt4sFK9i/Z40Mf8E8/gJ/wg/wm+N0vxHuLPz7vwx4H8TaLJealqt7K299KgiQQXViHkLNumllFsJZZ5kEMT4m5Vj9B6KdKoSVgCCASAQc/rRVElXVtP/tfSbu0+0Xdp9rgeDz7WXyriDcpXfG+Dtdc5VsHBANfnT+2D+xFofwK1v4M6Xpdtrvj3V4tKuPDmmXmtarp2kWulWlveaIY7OMwWm6yjuIkksjJpdo+oTG8jTfKwiC/o9Xz7+3npHiDxfffCfR/DXw5vPHuoW3i5fEM1ytzHaW/h61s7WaOWZpZJI43ecXYtPszOBcQXN2pKqGdU0NH5tf8FmvgTpvw0+IukfEGf4J+H18bQ6HqWlCx8P3beMor+xjZGlvLhZYoXtIrYbrczyRALHfNGqF/KMfC/wDBFrwp4l/ZaPw58c+F/DMdrrUuj3tpruiR2f2a98ZeH3vnikhkYlYpNUh1SB5rJ3CsbKSeOWTybZWH6p6n+xt4p+NM8UHj7xPpOheD41swnhLwday2wBt5TPul1FnV5He4dpQywLJbMsTW80dwsl3NW/a0/Zpsfhl8Jvit8SPAOkxp4v07Q7DxHpWlW8QjgGoaBDO9qtsFGYBc2jPp8yINkkD7MKHm81WKv0Po3Qtcs/FGh2Op6dcLd6fqVvHd2s6ghZ4ZEDo4BAIDKwPIzzRVfwZ4Og+HXgzR/D1rI01t4fsLfTIZGGGkSCJYlY+5CA0VRBpUUUUAFI6CRCrAMrDBBGQR6UUUAL1ooooA/9k=" class="nav-banner-image">
				<div class="nav-banner-subtitle" style="color: black">a few words about</div>
				<div class="nav-banner-title">Infinity Zone</div>
			</a>
		</div>
		<div class="nav-divider"></div>
		<div class="nav-bottom">
			<div class="float-right">
				<a href="{{ route('cart') }}" class="nav-cart">
					<div class="nav-cart-count">{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</div>
					<img src="data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAgCAQAAADdhmJCAAAACXBIWXMAAEGHAABBhwEONqVyAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAIWSURBVHjapJS/a1NRHMU/J4mt2mrS5kdb1ChkcBPFCoo6uDiJwYIgVAcrOrh0EvwjnB0U0cEfddBBRBA0Sl0qrYg/0MHYIFarSUpKsVRrfV+H1NrwXsJ76Ts8uPfyOPdzz+Ud6THbeckbXvGOD1Ro5tE92ZImtFU0IYXZQIbNbCRLLxc41wzJf+2Q6aPWBiepnd6X6XBwk7BqsfqIcWMlx0FxTcoJHm4tyRxJ9lFkeCUk1XALWh+AI6tr7sVnMp0JYHJecyEX2mXgRICjRKm4nWOakOmAb5LbeusmmeYBcMo3SYbPIY/lK8BBUr4sWtlE3svkOU9JcsSXSScJbxO4A5wm7MOkhxB577BS+i7TTh+xHpNpmzdJketAvw+SNAtM1tuhV6Zv6qpfQ1qjLqV0S58UidTZ4QUj7CbLJRK00UGcKFHaiZIkTYxO4iRoBR6xUP+0x2Uqq6AfcpYVaFWOZvRF7zWqYR0VkQa5Q5wWylSYokiREkVKlJmmwiy/mOeP919cVYeGZPqts2rX6qD1WFW3xmQa1/7mOraqqzLl1NNsUSPUorwcZYLUozvYeUpkGOQ1qzDAMAxwlsa2bD3EDA+9nHep4LrURur3uuJRnnCScS4CIUCL77+RgJ/spQ+4yRg5L5IBDMPRngY5hDWCYRoSImLu/u9e3LVRLa0jDcCWeh8kldOs7qqt4Z0MaEpfdUiIvwMA0R2sBIbRlZ0AAAAASUVORK5CYII=" class="nav-cart-image">
				</a>
				<div class="nav-bottom-divider"></div>
				<div class="nav-welcome">
					<div class="nav-welcome-message">
						Hi, <a href="{{ route('accountindex') }}" class="nav-welcome-username">{{ auth()->user()->username }}</a>
					</div>
					<div class="nav-logout float-right">
						<a href="{{ route('logout') }}" class="footnote">logout</a>	
					</div>
				</div>
			</div>
			<form action="{{ route('result') }}" method="get">
				<div class="nav-search">
					<div class="nav-search-label">
						<label for="terms">Search</label>
					</div>
					<div class="float-right">
						<button type="submit" class="search-button">Go</button>
					</div>
					<div class="search-field-div">
						<input type="search" id="terms" name="terms" class="search-field" placeholder="search {{ \App\Models\Product::where('deleted', false)->count() }} products..." value="{{ isset($terms) ? $terms : '' }}">
					</div>
					<input type="hidden" id="category" name="category" value="{{ isset($category) ? $category->slug : 'all' }}">
					<input type="hidden" id="order_by" name="order_by" value="{{ isset($orderBy) ? $orderBy : 'newest' }}">
					<input type="hidden" id="ships_from" name="ships_from" value="{{ isset($ships_from) ? $ships_from : 'all' }}">
					<input type="hidden" id="ships_to" name="ships_to" value="{{ isset($ships_to) ? $ships_to : 'all' }}">
				</div>
			</form>
		</div>
	</div>
	@include('includes.components.categories')
</header>