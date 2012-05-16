#!/bin/sh
# ---------------------------------------------------------------------
# Verifica si la conexi�n 3G / WAN est� activa y la sube si no lo est�.
# ---------------------------------------------------------------------

SERVER="8.8.8.8" # Este es el servidor DNS de Google's DNS server - si est� caido tenemos graves problemas
logger "3G: Script de Persistencia Ejecutado."

if ! ( ifconfig 3g-wan2); then
	logger "3G: La interfaz 3g-wan2 parece inactiva. Ejecutando de nuevo script de conexi�n."
	/www/pineapple/3g/3g.sh
else
	logger "3G: La interfaz 3g-wan2 parece activa."

	if ! ( ping -q -c 1 -W 10 $SERVER > /dev/null || ping -q -c 1 -W 10 $SERVER > /dev/null || ping -q -c 1 -W 10 $SERVER > /dev/null ); then
		logger "3G: Interfaz 3g-wan2 activa, sin embargo la conexi�n a Internet parece haberse caido. Verifique si el modem est� activo. Desconecte y conecte de nuevo el modem a la pi�a."
		logger "3G: Ejecutando ifup wan2. Esperando que esto resulva el problema."
		ifup wan2
		
	else
		logger "3G: Interfaz 3g-wan2 activa y la conexi�n a Internet parece estar arriba. woot"
	fi
fi
