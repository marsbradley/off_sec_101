#include <stdio.h>
#include <stdlib.h>

int main() {
    char entered_password[20]; // array of characters (a string)
    int authenticated = 0; // 0 false, 1 true

    printf("Enter the password: "); // provide a prompt
    gets(entered_password); // read in user input

    // check if password matches:
    if (strcmp(entered_password, "supersecurepassword") == 0) {
        printf ("Correct Password \n");
        authenticated = 1;
    } else {
        printf ("Incorrect Password \n");
    }

    if (authenticated) {
        printf ("You've been authenticated! \n");
    }
}
