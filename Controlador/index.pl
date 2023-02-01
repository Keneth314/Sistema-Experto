sintoma(s1):- true.
sintoma(s2):- true.
sintoma(s3):- false.
sintoma(s4):- true.
sintoma(s5):- true.
sintoma(s6):- false.
sintoma(s7):- true.
sintoma(s8):- true.
sintoma(s9):- true.
sintoma(s10):- false.
sintoma(s11):- true.
sintoma(s12):- false.
sintoma(s13):- true.
sintoma(s14):- true.
sintoma(s15):- false.
sintoma(s16):- true.
sintoma(s17):- true.
sintoma(s18):- true.
sintoma(s19):- true.
sintoma(s20):- false.
sintoma(s21):- false.
sintoma(s22):- true.
sintoma(s23):- true.
sintoma(s24):- false.
sintoma(s25):- true.
sintoma(s26):- true.
sintoma(s27):- false.
sintoma(s28):- true.
sintoma(s29):- true.
sintoma(s30):- true.
sintoma(s31):- false.
sintoma(s32):- true.
sintoma(s33):- true.
sintoma(s34):- false.
sintoma(s35):- true.
random:- sintoma(s1);sintoma(s2).
diagnostico1:-sintoma(s1),sintoma(s2),sintoma(s3),sintoma(s4),sintoma(s5),sintoma(s6).
diagnostico2:-sintoma(s7).
diagnostico3:-sintoma(s8),sintoma(s9).
diagnostico4:-sintoma(s10),sintoma(s11),sintoma(s12),sintoma(s13),sintoma(s14),sintoma(s15).
diagnostico5:-sintoma(s16),sintoma(s17).
diagnostico6:-sintoma(s18),sintoma(s19),sintoma(s20).
diagnostico7:-sintoma(s21).
diagnostico8:-sintoma(s22).
diagnostico9:-sintoma(s23).
diagnostico10:-sintoma(s24),sintoma(s25),sintoma(s26),sintoma(s27),sintoma(s28),sintoma(s29),sintoma(s30).
diagnostico11:-sintoma(s31).
diagnostico12:-sintoma(s32),sintoma(s33),sintoma(s34).
diagnostico13:-sintoma(s35).
diagnostico_final:- diagnostico1,diagnostico2.
main:- write("hola este es el archivo prolog").
