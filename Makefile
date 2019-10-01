init:
	mkdir -p service

compile:
	make init
	protoc  --php_out=./service ./proto/$(service).proto


clean: 
	rm -rf service