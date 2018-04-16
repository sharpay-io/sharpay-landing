addEventListener('fetch', event => {
	event.respondWith(handle(event.request))
})

async function handle(request) 
{
	try {
		let url = new URL(request.url)
		if( url.hostname == 'sharpay.io' )
		{
			const langs = { 
				'RU':'ru', 'UA':'ru', 'BY':'ru', 'KZ':'ru', 
				'CN':'zh', 'TW':'zh', 'SG':'zh', 'HK':'zh', 'MO':'zh', 
				'KR':'ko', 'KP':'ko', 
				'JP':'jp', 
				'PH':'ph', 
				'IT':'it', 
				'ES':'es', 'PH':'es', 'GQ':'es', 'AR':'es', 'BO':'es', 'CL':'es', 'CO':'es', 'CR':'es', 'CU':'es', 'DO':'es', 'EC':'es', 'GT':'es', 'HN':'es', 'MX':'es', 'NI':'es', 'PA':'es', 'PY':'es', 'PE':'es', 'PR':'es', 'SV':'es', 'UY':'es', 'VE':'es',
				'PT':'pt', 'AO':'pt', 'BR':'pt', 'TL':'pt', 'GW':'pt', 'CV':'pt', 'MZ':'pt', 'ST':'pt',
				'IN':'hi', 'PK':'hi', 'FJ':'hi'
			}
			let cookies = request.headers.get('Cookie') || null
			let useragent = request.headers.get('User-Agent') || null
			if ( ! ( ( useragent && useragent.includes('bot') ) || ( cookies && cookies.includes("language=true") ) ) && url.pathname == "/" ) 
			{
				let country = request.headers.get("CF-IpCountry")
				if( langs[ country ] !== undefined ) 
				{
					url.pathname = "/" + langs[ country ] + "/"
					return Response.redirect(url, 302)
				}
			} 
		}
	} 
	catch ( e ) {}	
	return fetch(request)
}