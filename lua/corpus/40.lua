function crash(depth)
  local init = '\27\76\117\97\81\0\1\4\4\4\8\0\7\0\0\0\61\115\116\100\105\110\0\1\0\0\0\1\0\0\0\0\0\0\2\2\0\0\0\36\0\0\0\30\0\128\0\0\0\0\0\1\0\0\0\0\0\0\0\1\0\0\0\1\0\0\0\0\0\0\2'
  local mid = '\1\0\0\0\30\0\128\0\0\0\0\0\0\0\0\0\1\0\0\0\1\0\0\0\0'
  local fin = '\0\0\0\0\0\0\0\2\0\0\0\1\0\0\0\1\0\0\0\1\0\0\0\2\0\0\0\97\0\1\0\0\0\1\0\0\0\0\0\0\0'
  local lch = '\2\0\0\0\36\0\0\0\30\0\128\0\0\0\0\0\1\0\0\0\0\0\0\0\1\0\0\0\1\0\0\0\0\0\0\2'
  local rch = '\0\0\0\0\0\0\0\2\0\0\0\1\0\0\0\1\0\0\0\1\0\0\0\2\0\0\0\97\0\1\0\0\0\1'
  for i=1,depth do lch,rch = lch..lch,rch..rch end
  loadstring(init .. lch .. mid .. rch .. fin)
end
for i=1,25 do print(i); crash(i) end
