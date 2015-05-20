#include "ilivresystem.h"
#include "ui_ilivresystem.h"

#include <QtCore>
#include <QtGui>
#include <QValidator>
#include <QRegExpValidator>
#include <QRegExp>

IlivreSystem::IlivreSystem(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::IlivreSystem)
{
    ui->setupUi(this);

    //Setar validadores
    QRegExp rx("[1-9]\\d{1,}");
    QValidator *validator_id = new QRegExpValidator(rx, this);
    ui->input_id->setValidator(validator_id);



    QSqlDatabase mydb = QSqlDatabase::addDatabase("QSQLITE");
    mydb.setDatabaseName("/home/paulo/htdocs_local/gitRepo/dbs/ilivre.db");

    if(!mydb.open()){
        //pass failure msg
        ui->connectedLabel->setText("Erro ao conectar! Reinicie!");
        //QMessageBox::information(this, "Conexão com Banco de dados", "Falha na conexão. Reinicie o sistema.");
    }
    else{
       //pass success msg
        ui->connectedLabel->setText("Connectou com sucesso!");
        //QMessageBox::information(this, "Conexão com Banco de dados", "Sucesso na conexão. Inicie o agendamento.");
    }

}

//void IlivreSystem::on_busca_id_clicked(){}

IlivreSystem::~IlivreSystem()
{
    delete ui;
}

void IlivreSystem::on_busca_id_released()
{
    QString id = ui->input_id->text();



    ui->connectedLabel->setText("Busca id: "+id+" clicado");
}
