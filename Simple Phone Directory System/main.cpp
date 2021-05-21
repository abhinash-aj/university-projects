//Include Files

#include <iostream>
#include <fstream>
#include <stdlib.h>
#include <iomanip>
#include <string.h>
#include <stdio.h>

using namespace std;

//Function Prototypes
void main_menu();
void second_menu();
void second_menu_list();

//Class Declaration
class phonebook
{
    int num;
    char name[15],phno[10],email[25];
public:
    void createDetail()
    {
        cout << "\t\t\t    ID           :  ";
        cin >> num;
        cout << "\t\t\t    Name         :  ";
        gets(name);                                     //c++ error or some garbage ...couldnt understand...but this fixed the skip of taking input...
        gets(name);
        cout << "\t\t\t    Phone Number :  ";
        gets(phno);
    }

    void showDetails()
    {

        cout << "\t\t   " << setw(3) << num << "  |" << setw(20)<< name << "  |" << setw(15)<< phno << endl;
    }
};

fstream dataFile;  // creating file object
phonebook phb;     // creating class object

//Function to write data to file
void writeData()
{
    system("cls");
    char ch;
    cout << endl << "\t\t\t       ENTER DATA TO DIRECTORY" << endl;
    cout << "\t\t____________________________________________________" << endl << endl;
    dataFile.open("data.txt",ios::out|ios::app);
    do
    {
        phb.createDetail();
        dataFile.write((char*)&phb,sizeof(phonebook));
        cout << "\t\t     Do You Want To Add More Record ? (y/n) : ";
        cin >> ch;
    }while(ch=='y'||ch=='Y');
    dataFile.close();
    second_menu_list();
    second_menu();
}

//function to read data from file
void readData()
{
    system("cls");
    dataFile.open("data.txt",ios::in);
    cout << endl << "\t\t\t\t    DATA DIRECTORY" << endl;
    cout << "\t\t____________________________________________________" << endl << endl;
    while(dataFile.read((char*)&phb,sizeof(phonebook)))
    {
        phb.showDetails();
    }
    dataFile.close();
    second_menu_list();
    int choice;
    cout << "\t\t\t    Enter Your Choice : ";
    cin >> choice;
    switch(choice)
    {
    case 1:
        main_menu();
    case 2:
        exit(0);
        break;
    default:
        cout << "\a";
        system("cls");
        readData();
    }
}

// main menu funtion
void main_menu()
{
    system("cls");
    int ch;
    cout << endl << "\t\t\t     PHONE BOOK DIRECTORY SYSTEM" << endl;
    cout << "\t\t____________________________________________________" << endl << endl;
    cout << "\t\t\t         1 . ADD NEW DATA." << endl;
    cout << "\t\t\t         2 . SHOW ALL DATA." << endl;
    cout << "\t\t\t         3 . EXIT DIRECTORY." << endl;
    cout << "\t\t____________________________________________________" << endl << endl;
    cout << "\t\t\t       Enter Your Choice : ";
    cin >> ch;
    switch(ch)
    {
    case 1:
        writeData();
        break;
    case 2:
        readData();
        break;
    case 3:
        exit(0);
        break;
    default:
        cout << "\a";
    }
    main_menu();
}

// function for printing the list of the second menu
void second_menu_list()
{
    cout << endl;
    cout << "\t\t____________________________________________________" << endl << endl;
    cout << "\t\t\t    Press 1 To Go Back To Main Menu." << endl;
    cout << "\t\t\t    Press 2 To Quit Application." << endl;
    cout << "\t\t____________________________________________________" << endl << endl;
}

// function for second menu only used in write data function
void second_menu()
{
    int choice;
    cout << "\t\t\t    Enter Your Choice : ";
    cin >> choice;
    switch(choice)
    {
    case 1:
        main_menu();
    case 2:
        exit(0);
        break;
    default:
        cout << "\t\t\t\tWrong Choice" << endl;
        cout << "\a";
    }
    second_menu();
}

// main function
int main(void)
{
    system("cls");
    main_menu();
}
