#include "ilivresystem.h"
#include "ui_ilivresystem.h"

IlivreSystem::IlivreSystem(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::IlivreSystem)
{
    ui->setupUi(this);

    QSqlDatabase mydb = QSqlDatabase::addDatabase("QSQLITE");
    mydb.setDatabaseName("c:Your/path/to/data/base.db");

    if(!mydb.open()){
        //pass failure msg
    }
    else{
       //pass success msg
    }

}

IlivreSystem::~IlivreSystem()
{
    delete ui;
}
