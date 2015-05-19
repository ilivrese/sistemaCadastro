#include "ilivresystem.h"
#include "ui_ilivresystem.h"

IlivreSystem::IlivreSystem(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::IlivreSystem)
{
    ui->setupUi(this);

    QSqlDatabase mydb = QSqlDatabase::addDatabase("QSQLITE");
    mydb.setDatabaseName("/home/paulo/htdocs_local/gitRepo/dbs/ilivre.db");

    if(!mydb.open()){
        //pass failure msg
        ui->connectedLabel->setText("Erro ao conectar! Reinicie!");
    }
    else{
       //pass success msg
        ui->connectedLabel->setText("Connectou com sucesso!");
    }

}

//void IlivreSystem::on_busca_id_clicked(){}

IlivreSystem::~IlivreSystem()
{
    delete ui;
}
