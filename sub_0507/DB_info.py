import pymysql

def db_info():
    db = pymysql.connect(host='164.125.68.22',
                         port=3306,
                         user='root',
                         passwd='apmsetup',
                         db='learning2',
                         charset='utf8')


def db_select(query,idx):
    db = pymysql.connect(host='164.125.68.22',
                         port=3306,
                         user='root',
                         passwd='apmsetup',
                         db='learning2',
                         charset='utf8')
    try:
        cursor = db.cursor()
        sql = query
        cursor.execute(sql,idx)
        result = cursor.fetchall()
    finally:
        return result
        db.close()


def db_update(query, score,idx):
    db = pymysql.connect(host='164.125.68.22',
                         port=3306,
                         user='root',
                         passwd='apmsetup',
                         db='learning2',
                         charset='utf8')
    try:
        cursor = db.cursor()
        cursor.execute(query,(score,idx))
        db.commit()
    finally:
        db.close()