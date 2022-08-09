if [[ -n "$1" ]]
then
	docker ps|grep "^[a-z0-9]+" -Eo|grep "$1"
else
	docker ps|grep "^[a-z0-9]+" -Eo
fi

