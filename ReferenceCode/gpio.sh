read -p "Start or Stop a GPIO pin? (start/stop) [gpio: 4-7, 17-11, 18-12, 21-13, 22-15, 23-16, 24-18, 25-22]      " response

if [ "$response" = "start" ]; then

	read -p "Which GPIO number?     " pin

	if [ "$pin" != "4" ] && [ "$pin" != "17" ] && [ "$pin" != "18" ] && [ "$pin" != "21" ] && [ "$pin" != "22" ] && [ "$pin" != "23" ]  && [ "$pin" != "24" ] && [ "$pin" != "25" ]; then

		echo "ERROR: You entered a GPIO number that doesn't exist."

	else

		echo "$pin" > /sys/class/gpio/export

		echo "1" > /sys/class/gpio/gpio$pin/value

		echo "Pin $pin started"
	
	fi

fi

if [ "$response" = "stop" ]; then

	read -p "Which GPIO number?     " pin

        if [ "$pin" != "4" ] && [ "$pin" != "17" ] && [ "$pin" != "18" ] && [ "$pin" != "21" ] && [ "$pin" != "22" ] && [ "$pin" != "23" ]  && [ "$pin" != "24" ] && [ "$pin" != "25" ]; then

                echo "ERROR: You entered a GPIO number that doesn't exist."

        else

                echo "0" > /sys/class/gpio/gpio$pin/value

		echo "$pin" > /sys/class/gpio/unexport

		echo "Pin $pin stopped"

        fi

fi