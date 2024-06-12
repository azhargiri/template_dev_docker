#/bin/sh





cd rumahinovasi && mv -f storage storage.$(date +%Y%m%d%H%I%S) && ln -sfr ../rumah-core/storage/app/public/ storage
	
