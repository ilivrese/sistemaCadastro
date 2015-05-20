#ifndef ILIVRESYSTEM_H
#define ILIVRESYSTEM_H

#include <QMainWindow>

#include <QtSql>
#include <QtDebug>
#include <QFileInfo>

namespace Ui {
class IlivreSystem;
}

class IlivreSystem : public QMainWindow
{
    Q_OBJECT

public:
    explicit IlivreSystem(QWidget *parent = 0);
    ~IlivreSystem();
    //void IlivreSystem::on_busca_id_clicked();

private slots:
    void on_busca_id_released();

private:
    Ui::IlivreSystem *ui;
};

#endif // ILIVRESYSTEM_H
